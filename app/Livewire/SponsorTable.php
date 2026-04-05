<?php

namespace App\Livewire;

use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class SponsorTable extends PowerGridComponent
{
    public string $tableName = 'sponsor-table';

    public string $primaryKey = 'id';

    public string $sortField = 'total_downline';

    public string $sortDirection = 'desc';

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
        $subQuery = DB::table('members as s')
            ->leftJoin('members as m', 'm.sponsor', '=', 's.id')
            ->select(
                's.id',
                's.username',
                's.name',
                's.rank',
                's.status',
                's.datecreated',
                DB::raw('COUNT(m.id) as total_downline')
            )
            ->groupBy('s.id', 's.username', 's.name')
            ->orderByDesc('total_downline')
            ->orderBy('s.id');

        return Sponsor::query()
            ->fromSub($subQuery, 'top_sponsors')
            ->selectRaw('
                ROW_NUMBER() OVER (ORDER BY total_downline DESC) as no,
                top_sponsors.*
            ');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('no')
            ->add('username')
            ->add('name')
            ->add('rank')
            ->add('rank_label', function (Sponsor $sponsor) {
                return match (strtolower($sponsor->rank ?? 'member')) {
                    'star' => '<span class="px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded">Star Member</span>',
                    'diamond' => '<span class="px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded">Diamond Member</span>',
                    'platinum' => '<span class="px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-100 rounded">Platinum Member</span>',
                    'gold' => '<span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded">Gold</span>',
                    'silver' => '<span class="px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded">Silver Member</span>',
                    default => '<span class="px-2 py-1 text-xs font-semibold text-gray-600 bg-gray-100 rounded">Member</span>',
                };
            })
            ->add('status_label', function (Sponsor $sponsor) {
                return match ((int) $sponsor->status) {
                    0 => '<span class="px-2 py-1 text-gray-500 bg-gray-100 rounded">Not Active</span>',
                    1 => '<span class="px-2 py-1 text-green-600 bg-green-100 font-semibold rounded">Active</span>',
                    2 => '<span class="px-2 py-1 text-red-600 bg-red-100 font-semibold rounded">Banned</span>',
                };
            })
            ->add('datecreated')
            ->add('datecreated_formatted', fn(Sponsor $sponsor) => $sponsor->datecreated?->format('d M Y') ?? '-')
            ->add('total_downline');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'no'),
            Column::make('Username', 'username')
                ->sortable(),
            Column::make('Name', 'name')
                ->sortable(),
            Column::make('Rank', 'rank_label', 'rank')
                ->sortable(),
            Column::make('Status', 'status_label', 'status')
                ->sortable(),
            Column::make('Tanggal Daftar', 'datecreated_formatted', 'datecreated')
                ->sortable(),
            Column::make('Total Downline', 'total_downline')
                ->sortable(),
            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('username')
                ->operators(['contains']),
            Filter::inputText('name')
                ->operators(['contains']),
            Filter::select('rank')
                ->dataSource([
                    ['id' => 0, 'name' => 'Member'],
                    ['id' => 1, 'name' => 'Star Member'],
                    ['id' => 2, 'name' => 'Diamond Member'],
                    ['id' => 3, 'name' => 'Platinum Member'],
                    ['id' => 4, 'name' => 'Gold Member'],
                    ['id' => 5, 'name' => 'Silver Member'],
                ])
                ->optionValue('id')
                ->optionLabel('name'),
            Filter::select('status')
                ->dataSource([
                    ['id' => 0, 'name' => 'Not Active'],
                    ['id' => 1, 'name' => 'Active'],
                    ['id' => 2, 'name' => 'Banned'],
                ])
                ->optionValue('id')
                ->optionLabel('name'),
            Filter::datePicker('datecreated'),
            Filter::inputText('total_downline')
                ->operators(['contains'])
                ->builder(function ($query, $value) {
                    $search = is_array($value) ? ($value['value'] ?? '') : $value;

                    return $query->where('total_downline', 'like', "%{$search}%");
                }),
        ];
    }

    #[On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Sponsor $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id]),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */

    // public function paginate(): ?int
    // {
    //     return 15;
    // }
}
