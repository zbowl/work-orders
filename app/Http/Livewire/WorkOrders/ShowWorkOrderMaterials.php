<?php

namespace App\Http\Livewire\WorkOrders;

use App\Models\Material;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ShowWorkOrderMaterials extends Component
{

    public Collection $workOrderMaterials;


    public function mount(Collection $workOrderMaterials)
    {
        $this->workOrderMaterials = $workOrderMaterials;
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.work-orders.show-work-order-materials');
    }
}
