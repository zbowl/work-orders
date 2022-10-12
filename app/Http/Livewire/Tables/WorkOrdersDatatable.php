<?php

namespace App\Http\Livewire\Tables;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class WorkOrdersDatatable extends LivewireDatatable
{
    public $name = 'WorkOrdersDatatable';
    public $title = 'WorkOrdersDatatable';

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return WorkOrder::query();
    }

    public function columns(): array
    {
        return [
            NumberColumn::name('id')
                ->label('Id')
                ->hide(),

            Column::name('work_order_number')
                ->label('Number')
                ->link('/work-orders/{{id}}')
                ->searchable(),

            Column::name('workOrderType.name')
                ->label('Type')
                ->searchable()
                ->filterable($this->workOrderTypes),

            Column::name('priority.name')
                ->label('Priority')
                ->searchable()
                ->filterable($this->priorities),

            Column::name('status.name')
                ->label('Status')
                ->searchable()
                ->filterable($this->statuses),

            Column::name('category.name')
                ->label('Category')
                ->searchable()
                ->filterable($this->categories),

            Column::name('subCategory.name')
                ->label('Sub Category')
                ->searchable()
                ->filterable($this->subCategories),

            DateColumn::name('scheduled_at')
                ->label('Scheduled')
                //->format('Y-m-d H:i:s') //database format
                ->format('l F jS @ g:i a')
                ->searchable()
                ->filterable(),

        ];


    }

    public function getPrioritiesProperty()
    {
        return Priority::pluck('name');
    }

    public function getStatusesProperty()
    {
        return Status::pluck('name');
    }

    public function getCategoriesProperty()
    {
        return Category::pluck('name');
    }

    public function getSubCategoriesProperty()
    {
        return SubCategory::pluck('name');
    }

    public function getWorkOrderTypesProperty()
    {
        return WorkOrderType::pluck('name');
    }

}
