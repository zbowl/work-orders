<?php

namespace App\Http\Livewire\Tables;

use App\Models\Material;
use App\Models\WorkOrder;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class WorkOrderMaterialsDatatable extends LivewireDatatable
{
    public $name = 'WorkOrderMaterialsDatatable';
    public $title = 'WorkOrderMaterialsDatatable';

    public int $workOrderId;

    protected $listeners = [
        'locateWorkOrderMaterials'
    ];


    public function builder()
    {
        return Material::query()
            ->join('material_work_order', 'materials.id', 'material_work_order.material_id')
            ->join('work_orders', 'work_orders.id', 'material_work_order.work_order_id')
            ->leftJoin('inventory_assets', 'inventory_assets.id', 'materials.inventory_asset_id')
            ->where('work_orders.id', $this->workOrderId ?? 0);
    }

    public function columns()
    {
        return [
            Column::checkbox(),

            Column::name('inventory_assets.item_number')
                ->label('Item Number')
                ->searchable(),
            NumberColumn::name('quantity_requested')
                ->label('Quantity')
                ->editable(),
            NumberColumn::raw('CONVERT(inventory_assets.unit_price, decimal) / 100 AS Unit Price')
                ->format(2),
            NumberColumn::raw('CONVERT(materials.quantity_requested * inventory_assets.unit_price, float) / 100 AS Total')
                ->format(2)
                ->enableSummary(),
            // Use for Microsoft SQL Server
            /*
           NumberColumn::raw('CONVERT(inventory_assets.unit_price, decimal) / 100 AS Unit Price')
               ->format(2),
           NumberColumn::raw('CONVERT(materials.quantity_requested * inventory_assets.unit_price, float) / 100 AS Total')
               ->format(2)
               ->enableSummary(),
            */
            //NumberColumn::name('inventory_assets.quantity_allocated')
            //    ->label('Total')
            //    ->view('custom-datatable.materials-total-cost')
            //    ->enableSummary(),

        ];
    }

    public function locateWorkOrderMaterials(int $workOrderId)
    {
        $this->workOrderId = $workOrderId;
    }
}
