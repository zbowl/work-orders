<?php

namespace App\Http\Livewire\Tables;

use App\Models\SubCategory;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SubCategoriesDatatable extends LivewireDatatable
{
    public $name = 'SubCategoryDatatable';

    public function builder()
    {
        return SubCategory::query();
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
                ->editable()
                ->label('Order'),

            Column::name('category.name')
                ->label('Category')
                ->editable()
                ->searchable(),

        ];
    }
}
