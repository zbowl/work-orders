<?php

namespace App\Http\Livewire\Tables;

use App\Models\Task;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TasksDatatable extends LivewireDatatable
{
    public $name = 'TaskDatatable';

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return Task::query();
    }

    public function columns(): array
    {
        return [
            Column::name('name')
                ->label('Name')
                ->editable()
                ->searchable(),

            Column::name('description')
                ->label('Description')
                ->editable(),

            Column::name('order')
                ->label('Order'),
        ];
    }
}
