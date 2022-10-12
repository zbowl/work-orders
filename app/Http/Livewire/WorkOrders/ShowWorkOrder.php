<?php

namespace App\Http\Livewire\WorkOrders;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ShowWorkOrder extends Component
{
    public WorkOrder $workOrder;
    public Collection $workOrderTypes;
    public Collection $categories;
    public Collection $subCategories;
    public Collection $priorities;
    public Collection $statuses;
    public mixed $workOrderMaterials;


    public function mount(WorkOrder $workOrder)
    {
        $this->workOrder = $workOrder;

        $this->workOrderMaterials = $workOrder->materials;
        //$this->emitTo('WorkOrderMaterialsDatatable','locateWorkOrderMaterials',$this->getWorkOrderId());
        //$this->emit('locateWorkOrderMaterials', $this->getWorkOrderId());
        //$this->emit('locateWorkOrderTasks', $this->getWorkOrderId());
        $this->workOrderTypes = WorkOrderType::pluck('name', 'id');
        $this->categories = Category::orderBy('order')->pluck('name', 'id');
        $this->subCategories = SubCategory::whereRelation('category', 'category_id', $workOrder->category->id)->orderBy('order')->pluck('name', 'id');
        $this->priorities = Priority::orderBy('order')->pluck('name', 'id');
        $this->statuses = Status::orderByDesc('order')->pluck('name', 'id');

    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.work-orders.show-work-order');
    }

    private function getWorkOrderId()
    {
        return empty($this->workOrder->id) ? 0 : $this->workOrder->id;
    }

    public function workOrderTypeEdited($id)
    {
        $this->workOrder->workOrderType()->dissociate();
        $this->workOrder->workOrderType()->associate($id);


        $this->emit('fieldEdited', $this->workOrder->workOrderType->work_order_type_id); //TODO: this should send to a notification either popup alert or banner alert
    }

    public function categoryEdited($id)
    {
        $this->workOrder->category()->dissociate();
        $this->workOrder->category()->associate($id);


        $this->emit('fieldEdited', $this->workOrder->category->category_id); //TODO: this should send to a notification either popup alert or banner alert
    }

    public function subCategoryEdited($id)
    {
        $this->workOrder->subCategory()->dissociate();
        $this->workOrder->subCategory()->associate($id);


        $this->emit('fieldEdited', $this->workOrder->subCategory->sub_category_id); //TODO: this should send to a notification either popup alert or banner alert
    }

    public function priorityEdited($id)
    {
        $this->workOrder->priority()->dissociate();
        $this->workOrder->priority()->associate($id);


        $this->emit('fieldEdited', $this->workOrder->priority->priority_id); //TODO: this should send to a notification either popup alert or banner alert
    }

    public function statusEdited($id)
    {
        $this->workOrder->status()->dissociate();
        $this->workOrder->status()->associate($id);


        $this->emit('fieldEdited', $this->workOrder->status->status_id); //TODO: this should send to a notification either popup alert or banner alert
    }
}
