<?php

namespace App\Livewire;

use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class SponsorTable extends PowerGridComponent
{
    public string $tableName = 'sponsor-table';
    public string $primaryKey = 'id';
    public int $perPage = 15;
    public string $sortField = 'total_downline';
    public string $sortDirection = 'desc';

    public function setUp(): array
    {
        return [
            // PowerGrid::header(),
            PowerGrid::footer()
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
                DB::raw('COUNT(m.id) as total_downline')
            )
            ->groupBy('s.id', 's.username', 's.name')
            ->orderByDesc('total_downline')
            ->orderBy('s.id')
            ->limit(15);

        return Sponsor::query()
            ->fromSub($subQuery, 'top_sponsors');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        $currentPage = (int) ($this->page ?? request()->query('page', 1));
        $perPage     = (int) ($this->perPage ?? 15);
        $rowNumber   = ($currentPage - 1) * $perPage;

        return PowerGrid::fields()
            ->add('no', function () use (&$rowNumber) {
                return ++$rowNumber;
            })
            ->add('username')
            ->add('name')
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
            Column::make('Total Downline', 'total_downline')
                ->sortable(),
            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('username')
                ->operators(['contains']),
            Filter::inputText('name')
                ->operators(['contains']),
            Filter::inputText('total_downline')
                ->operators(['contains'])
                ->builder(function ($query, $value) {
                    $search = is_array($value) ? ($value['value'] ?? '') : $value;
                    return $query->where('total_downline', 'like', "%{$search}%");
                }),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
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
                ->dispatch('edit', ['rowId' => $row->id])
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

    public function paginate(): ?int
    {
        return 15;
    }
}
