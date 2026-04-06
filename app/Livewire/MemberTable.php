<?php

namespace App\Livewire;

use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class MemberTable extends PowerGridComponent
{
    public string $tableName = 'members';

    public function setUp(): array
    {
        return [
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Member::query()
            ->selectRaw('
                ROW_NUMBER() OVER (ORDER BY id) as no,
                members.*
            ')
            ->where('id', '>', 1)
            ->with(['sponsorData', 'upline', 'user']);
    }

    public function relationSearch(): array
    {
        return [
            'sponsorData' => [
                'name',
                'username',
            ],
            'upline' => [
                'name',
                'username',
            ],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('no')
            ->add('username')
            ->add('name')
            ->add('rank')
            ->add('rank_label', function (Member $member) {
                return match (strtolower($member->rank ?? 'member')) {
                    'star' => '<span class="px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded">Star Member</span>',
                    'gold' => '<span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded">Gold</span>',
                    'silver' => '<span class="px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded">Silver</span>',
                    'bronze' => '<span class="px-2 py-1 text-xs font-semibold text-orange-700 bg-orange-200 rounded">Bronze</span>',
                    'member' => '<span class="px-2 py-1 text-xs font-semibold text-gray-600 bg-gray-100 rounded">Member</span>',
                    default => '<span class="px-2 py-1 text-xs text-gray-400">Unknown</span>',
                };
            })
            ->add('contact', function (Member $member) {
                return '<div>'
                    . '<div class="font-semibold">' . e($member->email ?: '-') . '</div>'
                    . '<div class="text-xs text-gray-500">' . e($member->phone ?: '-') . '</div>'
                    . '</div>';
            })
            ->add('sponsor', function (Member $member) {
                return '<div>'
                    . '<div class="font-semibold uppercase">' . e($member->sponsorData?->username ?? '-') . '</div>'
                    . '<div class="text-xs uppercase text-gray-500">' . e($member->sponsorData?->name ?? '-') . '</div>'
                    . '</div>';
            })
            ->add('upline', function (Member $member) {
                return '<div>'
                    . '<div class="font-semibold uppercase">' . e($member->upline?->username ?? '-') . '</div>'
                    . '<div class="text-xs uppercase text-gray-500">' . e($member->upline?->name ?? '-') . '</div>'
                    . '</div>';
            })
            ->add('position')
            ->add('status_label', function (Member $member) {
                return match ((int) $member->status) {
                    0 => '<span class="px-2 py-1 text-gray-500 bg-gray-100 rounded">Not Active</span>',
                    1 => '<span class="px-2 py-1 text-green-600 bg-green-100 font-semibold rounded">Active</span>',
                    2 => '<span class="px-2 py-1 text-red-600 bg-red-100 font-semibold rounded">Banned</span>',
                    3 => '<span class="px-2 py-1 text-black bg-gray-200 rounded">Deleted</span>',
                    default => '<span class="px-2 py-1 text-xs text-gray-400">Unknown</span>',
                };
            })
            ->add('datecreated')
            ->add('datecreated_formatted', fn(Member $member) => $member->datecreated?->format('d M Y') ?? '-')
            ->add('last_login')
            ->add('last_login_formatted', fn(Member $member) => $member->last_login?->format('d M Y') ?? '-');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'no'),
            Column::make('Username', 'username')->sortable(),
            Column::make('Name', 'name')->sortable(),
            Column::make('Rank', 'rank_label', 'rank')->sortable(),
            Column::make('Contact', 'contact', 'email', 'phone')->sortable(),
            Column::make('Sponsor', 'sponsor')->sortable(),
            Column::make('Upline', 'upline', 'parent')->sortable(),
            Column::make('Position', 'position')->sortable(),
            Column::make('Status', 'status_label', 'status')->sortable(),
            Column::make('Join Date', 'datecreated_formatted', 'datecreated')->sortable(),
            Column::make('Last Login', 'last_login_formatted', 'last_login')->sortable(),
            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('username')->operators(['contains']),
            Filter::inputText('name')->operators(['contains']),
            // Rank as select (try config first, fallback to distinct values)
            Filter::select('rank')
                ->dataSource(function () {
                    $ranks = config('ranks');

                    if (is_array($ranks) && count($ranks) > 0) {
                        return collect($ranks)->map(fn($label, $key) => ['id' => $key, 'name' => $label])->values()->toArray();
                    }

                    return Member::query()->distinct()->pluck('rank')->filter()->map(fn($r) => ['id' => $r, 'name' => ucfirst($r)])->values()->toArray();
                })
                ->optionValue('id')
                ->optionLabel('name'),

            // Email and Phone separate filters (matches CI3 UI)
            Filter::inputText('email')->operators(['contains']),
            Filter::inputText('phone')->operators(['contains']),
            Filter::inputText('sponsor')
                ->operators(['contains'])
                ->builder(function (Builder $query, $value) {
                    $search = is_array($value) ? trim($value['value'] ?? '') : trim($value);

                    if ($search === '') {
                        return;
                    }

                    $query->whereHas('sponsorData', function (Builder $sponsorQuery) use ($search) {
                        $sponsorQuery->where('username', 'like', "%{$search}%")
                            ->orWhere('name', 'like', "%{$search}%");
                    });
                }),
            Filter::inputText('upline')
                ->operators(['contains'])
                ->builder(function (Builder $query, $value) {
                    $search = is_array($value) ? trim($value['value'] ?? '') : trim($value);

                    if ($search === '') {
                        return;
                    }

                    $query->whereHas('upline', function (Builder $uplineQuery) use ($search) {
                        $uplineQuery->where('username', 'like', "%{$search}%")
                            ->orWhere('name', 'like', "%{$search}%");
                    });
                }),
            Filter::select('position')
                ->dataSource(function () {
                    $positions = Member::query()->distinct()->pluck('position')->filter()->values();

                    return $positions->map(fn($p) => ['id' => $p, 'name' => strtoupper($p)])->toArray();
                })
                ->optionValue('id')
                ->optionLabel('name'),
            Filter::select('status')
                ->dataSource([
                    ['id' => 0, 'name' => 'Not Active'],
                    ['id' => 1, 'name' => 'Active'],
                    ['id' => 2, 'name' => 'Banned'],
                    ['id' => 3, 'name' => 'Deleted'],
                ])
                ->optionValue('id')
                ->optionLabel('name'),
            Filter::datepicker('datecreated_formatted', 'datecreated'),
            Filter::datepicker('last_login_formatted', 'last_login'),
        ];
    }

    public function actions(Member $row): array
    {
        return [
            Button::add('impersonate')
                ->slot('<i class="fas fa-user-secret"></i>')
                ->route('impersonation.start', ['member' => $row->id])
                ->can(fn(Member $member) => auth()->user()?->isAdministrator() && filled($member->user_id) && $member->user_id !== auth()->id())
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700'),
            Button::add('show')
                ->slot('<i class="fas fa-info"></i>')
                ->route('member.show', ['member' => $row->id])
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700'),
        ];
    }
}
