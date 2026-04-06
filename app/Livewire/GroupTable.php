<?php

namespace App\Livewire;

use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class GroupTable extends PowerGridComponent
{
    public string $tableName = 'groupTable';

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
        // Try to group members by a 'group' column (fallback to 'member_group' or 'unknown')
        $groupColumn = Schema::hasColumn('members', 'group') ? 'group' : (Schema::hasColumn('members', 'member_group') ? 'member_group' : null);

        if (! $groupColumn) {
            // No group column found — return empty result set to avoid SQL errors.
            return Member::query()->whereRaw('0 = 1');
        }

        $sub = DB::table('members')
            ->selectRaw("COALESCE({$groupColumn}, '') as grp, COUNT(*) as total_member")
            ->groupBy('grp');

        return Member::query()
            ->fromSub($sub, 'member_groups')
            ->selectRaw('ROW_NUMBER() OVER (ORDER BY total_member DESC) as no, member_groups.*');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('no')
            ->add('grp')
            ->add('total_member');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'no'),
            Column::make('Group', 'grp')
                ->sortable(),
            Column::make('Total Member', 'total_member')
                ->sortable(),
            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('grp')
                ->operators(['contains'])
                ->placeholder('group'),
            Filter::number('total_member')
                ->placeholder('Min', 'Max'),
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
