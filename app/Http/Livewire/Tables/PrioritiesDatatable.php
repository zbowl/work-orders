<?php

namespace App\Http\Livewire\Tables;

use App\Models\Priority;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PrioritiesDatatable extends LivewireDatatable
{
    public $name = 'PriorityDatatable';

    public function builder()
    {
        return Priority::query();
    }

    public function columns()
    {
        return [
            Column::name('name')
                ->label('Name')
                ->editable()
                ->searchable(),

            Column::name('description')
                ->label('Description')
                ->editable()
                ->searchable(),

            Column::name('order')
                ->label('Order'),

        ];
    }
}
