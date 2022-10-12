<?php

namespace App\Http\Livewire\Tables;

use App\Models\Status;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class StatusesDatatable extends LivewireDatatable
{
    public $name = 'StatusDatatable';

    public function builder()
    {
        return Status::query();
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
                ->editable(),

            Column::name('order')
                ->label('Order'),

        ];
    }
}
