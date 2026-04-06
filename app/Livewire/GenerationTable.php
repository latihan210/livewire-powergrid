<?php

namespace App\Livewire;

use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

class GenerationTable extends PowerGridComponent
{
    public string $tableName = 'generation-table';

    public int $memberId = 0;

    public function mount(): void
    {
        parent::mount();

        // Resolve memberId from query parameters (username or member_id)
        if ($username = request()->query('username')) {
            $this->memberId = Member::where('username', $username)->value('id') ?? 0;
        } elseif (request()->has('member_id')) {
            $this->memberId = (int) request()->query('member_id');
        }
    }

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput(),
            PowerGrid::footer()->showPerPage()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        $memberId = (int) $this->memberId;
        // If no memberId provided, return a general members list (with sponsor info)
        if ($memberId <= 0) {
            // Join a subquery that only exposes id, username and name (no gen/other columns)
            // so unqualified column names (like `gen`) won't be ambiguous.
            $sponsorSub = DB::raw('(select id, username, name from members) as b');

            $query = Member::query()
                ->leftJoin($sponsorSub, 'members.sponsor', '=', 'b.id')
                ->where('members.username', '<>', 'masteradmin')
                ->select('members.*', 'b.username as sponsor_username', 'b.name as sponsor_name');

            return $query;
        }

        // Wrap ke Eloquent Builder agar PowerGrid happy (CTE for downline of a specific member)
        $query = Member::query()
            ->from(DB::raw("(
                WITH RECURSIVE MemberHierarchy AS (
                    SELECT id, username, name, gen, sponsor, total_omzet, status
                    FROM members
                    WHERE id = {$memberId}

                    UNION ALL

                    SELECT m.id, m.username, m.name, m.gen, m.sponsor, m.total_omzet, m.status
                    FROM members m
                    INNER JOIN MemberHierarchy mh ON m.sponsor = mh.id
                )
                SELECT
                    A.id, A.username, A.name, A.gen,
                    A.total_omzet, A.status,
                    B.name     AS sponsor_name,
                    B.username AS sponsor_username
                FROM MemberHierarchy A
                INNER JOIN members B ON B.id = A.sponsor
                WHERE A.id != {$memberId} AND A.username <> 'masteradmin'
            ) as members"))
            ->select('*');

        return $query;
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('username')
            ->add('name')
            ->add('sponsor_username')
            ->add('sponsor_name')
            ->add(
                'member_info',
                fn ($row) => '<div>
                    <span class="font-bold text-primary-600">'.strtoupper(e($row->username)).'</span><br>
                    <span class="text-sm text-neutral-500">'.e($row->name).'</span>
                </div>'
            )
            ->add(
                'sponsor_info',
                fn ($row) => '<div>
                    <span class="font-bold">'.strtoupper(e($row->sponsor_username)).'</span><br>
                    <small class="text-neutral-500">'.e($row->sponsor_name).'</small>
                </div>'
            )
            ->add(
                'gen_badge',
                fn ($row) => '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold '.
                    ($row->gen % 2 === 0
                        ? 'bg-blue-100 text-blue-700'
                        : 'bg-green-100 text-green-700').
                    '">Gen-'.e($row->gen).'</span>'
            )
            ->add(
                'total_omzet_formatted',
                fn ($row) => number_format($row->total_omzet, 0, ',', '.')
            )
            ->add(
                'action',
                fn ($row) => '<a href="'.route('generation', ['username' => $row->username]).'"
                    class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-semibold
                           bg-neutral-100 hover:bg-primary-600 hover:text-white transition-all">
                    Detail
                </a>'
            );
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id')
                ->index(),

            Column::make('Member', 'member_info', 'members.username')
                ->sortable()
                ->searchable(),

            Column::make('Sponsor', 'sponsor_info', 'sponsor_username')
                ->sortable()
                ->searchable(),

            Column::make('Generasi', 'gen_badge', 'members.gen')
                ->sortable(),

            Column::make('Total Omset', 'total_omzet_formatted', 'members.total_omzet')
                ->sortable(),

            Column::make('Proses', 'action')
                ->visibleInExport(false),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('username')->placeholder('Username'),
            Filter::inputText('name')->placeholder('Nama'),
            Filter::inputText('sponsor_username')->placeholder('Sponsor'),
            Filter::number('gen')->placeholder('Min', 'Max'),
            Filter::number('total_omzet')->placeholder('Min', 'Max'),
        ];
    }
}
