<?php

namespace App\Http\Livewire\Tables;

use App\Models\Category;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CategoriesDatatable extends LivewireDatatable
{
    public $name = 'CategoryDatatable';

    public function builder()
    {
        return Category::query();
    }

    public function columns()
    {
        return [
            Column::name('name')
                ->label('Name')
                ->editable()
                ->searchable(),

            Column::name('description')
                ->label('Description'),

            Column::name('order')
                ->label('Order'),

        ];
    }
}
