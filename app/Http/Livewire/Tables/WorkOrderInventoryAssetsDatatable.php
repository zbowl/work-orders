<?php

namespace App\Http\Livewire\Tables;

use App\Models\InventoryAsset;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class WorkOrderInventoryAssetsDatatable extends LivewireDatatable
{
    public $name = 'WorkOrderInventoryAssetsDatatable';
    public $title = 'WorkOrderInventoryAssetsDatatable';

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return InventoryAsset::query();
    }

    public function columns(): array
    {
        return [
            Column::checkbox(),





        ];
    }
}
