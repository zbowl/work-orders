<?php

namespace App\Http\Livewire\Forms;

use App\Http\Requests\StoreWorkOrderRequest;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Illuminate\Support\Collection;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class WorkOrderForm extends Component
{
    use WithFileUploads;

    public WorkOrder $workOrder;
    public array $workOrderTypes;
    public array $categories;
    public array $subCategories;
    public array $priorities;
    public array $statuses;
    public mixed $workOrderMaterials;

    public $priorityId;
    public $statusId;
    public $categoryId;
    public $subCategoryId;

    public $scheduledDate;

    public $label = 'Image Upload';
    public $files = [];
    public $images = [];
    protected $rules = [];

    public Collection $interventionImage;
    public $interventionImages;
    public array|false $exifData;

    public function mount()
    {
        $categories = Category::orderByDesc('order');
        //dd($categories);
        $this->workOrderTypes = WorkOrderType::pluck('name', 'id')->toArray();
        $this->categories = $categories->pluck('name', 'id')->toArray();
        //$this->subCategories = $categories->subCategories->pluck('name', 'id')->toArray(); //SubCategory::whereRelation('category', 'category_id', $workOrder->category->id)->orderBy('order')->pluck('name', 'id');
        $this->priorities = Priority::orderByDesc('order')->pluck('name', 'id')->toArray();
        $this->statuses = Status::orderByDesc('order')->pluck('name', 'id')->toArray();

    }
    public function render()
    {
        return view('livewire.forms.work-order-form');
    }

    public function updatedCategoryId($key)
    {
        $this->subCategories = SubCategory::where('category_id',$key)->pluck('name','id')->toArray();
    }

    public function updatedImages(): void
    {
        $this->rules = $this->rules();

        $this->validate([
            'images.*' => $this->rules['images']
        ]);

    }

    public function save()
    {
        foreach ($this->images as $image) {
            $this->interventionImages[] = exif_read_data($image->getRealPath());
        }
    }
    public function rules():array
    {
        return (new StoreWorkOrderRequest)->rules();
    }
}
