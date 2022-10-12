<?php

namespace App\Http\Livewire\Forms;

use App\Http\Requests\StoreWorkOrderRequest;
use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\WithFileUploads;

class WorkOrderImageUpload extends Component
{
    use WithFileUploads;

    public $label = 'Image Upload';
    public $images = [];

    protected $rules = [];


    public function render()
    {
        return view('livewire.forms.work-order-image-upload');
    }

    public function save()
    {
        foreach ($this->images as $image) {
            $image->store('work-order-images');
        }
    }

    public function updatedImages(): void
    {
        $this->rules = $this->rules();

        $this->validate([
            'images.*' => $this->rules['images']
        ]);

        foreach ($this->images as $image) {
            $image->store('work-order-images');
        }

    }

    public function rules(): array
    {
        return (new StoreWorkOrderRequest)->rules();
    }
}
