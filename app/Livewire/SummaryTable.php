<?php

namespace App\Livewire;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class SummaryTable extends PowerGridComponent
{
    public string $tableName = 'summaryTable';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Member::query()
            ->selectRaw('ROW_NUMBER() OVER (ORDER BY id) as no, members.*')
            ->where('username', '<>', 'masteradmin');
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
            ->add('status')
            ->add('datecreated')
            ->add('datecreated_formatted', fn ($row) => isset($row->datecreated) ? Carbon::parse($row->datecreated)->format('d M Y') : '-');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'no'),
            Column::make('Username', 'username')
                ->sortable(),
            Column::make('Name', 'name')
                ->sortable(),
            Column::make('Rank', 'rank')
                ->sortable(),
            Column::make('Status', 'status')
                ->sortable(),
            Column::make('Tanggal Daftar', 'datecreated_formatted', 'datecreated')
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
                ->dataSource(function () {
                    $ranks = config('ranks') ?? [];

                    if (is_array($ranks) && count($ranks) > 0) {
                        return collect($ranks)->map(fn ($label, $key) => ['id' => $key, 'name' => $label])->values()->toArray();
                    }

                    return Member::query()->distinct()->pluck('rank')->filter()->map(fn ($r) => ['id' => $r, 'name' => ucfirst($r)])->values()->toArray();
                })
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
        ];
    }

    #[On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Member $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->id)
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
}
