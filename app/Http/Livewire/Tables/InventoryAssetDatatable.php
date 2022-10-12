<?php

namespace App\Http\Livewire\Tables;

use App\Models\InventoryAsset;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class InventoryAssetDatatable extends LivewireDatatable
{
    public $name = 'InventoryAssetDatatable';
    public $hideable = 'select';

    public $complex = true;
    public $exportable = true;


    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return InventoryAsset::query();
    }

    public function columns(): array
    {
        return [
            Column::name('item_number')
                ->label('Number'),

            Column::name('item_description')
                ->label('Description')
                ->searchable(),

            Column::name('bin_number')
                ->label('Bin')
                ->editable()
                ->filterable($this->bins),

            NumberColumn::name('unit_price')
                ->label('Unit Price')
                ->format(2),

            Column::name('quantity_on_hand')
                ->label('Qty on Hand')
                ->filterable(),

            Column::name('safety_stock')
                ->label('Safety Stock')
                ->filterable(),

            Column::name('quantity_on_order')
                ->label('Qty on Order')
                ->filterable(),

            Column::name('quantity_allocated')
                ->label('Qty Allocated')
                ->filterable(),

            Column::name('item_class_code')
                ->label('Class Code')
                ->filterable($this->classCodes),

            Column::name('location_code')
                ->label('Location Code')
                ->filterable($this->locationCodes),

        ];
    }

    public function getBinsProperty()
    {
        return InventoryAsset::pluck('bin_number');
    }

    public function getClassCodesProperty()
    {
        return InventoryAsset::pluck('item_class_code');
    }

    public function getLocationCodesProperty()
    {
        return InventoryAsset::pluck('location_code');
    }

    public function getPersistKeyProperty(): string
    {
        return Auth::id() . '-' . parent::getPersistKeyProperty();
    }
}
