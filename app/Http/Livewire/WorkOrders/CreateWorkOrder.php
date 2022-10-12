<?php

namespace App\Http\Livewire\WorkOrders;

use Livewire\Component;

class CreateWorkOrder extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.work-orders.create-work-order');
    }
}
