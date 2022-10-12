<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Status;
use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Livewire\Component;

class Dashboard extends Component
{

    public int $numberOfOpenOrders;
    public int $numberOfOrdersWithMaterials;
    public array $numberOfOrdersByType;
    public array $numberOfOrdersByCategory;
    public array $numberOfOrdersByStatus;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $this->numberOfOpenOrders = WorkOrder::whereNull('completed_at')->count();

        $this->numberOfOrdersWithMaterials = WorkOrder::withCount(['materials'])->count();

        $this->numberOfOrdersByType = WorkOrderType::select(['name'])->withCount(['workOrders'])->get()->toArray();

        $this->numberOfOrdersByCategory = Category::select(['name'])->withCount(['workOrders'])->get()->toArray();

        $this->numberOfOrdersByStatus = Status::select(['name'])->withCount(['workOrders'])->get()->toArray();

        return view('livewire.dashboard');
    }
}
