<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;

class WorkOrderFileUpload extends Component
{
    use WithFileUploads;

    public $label = 'File Upload';
    public $files = [];



    public function render()
    {
        return view('livewire.forms.work-order-file-upload');
    }

    public function save()
    {
        $this->validate([

        ]);

        foreach ($this->files as $file) {
            $file->store('work-order-files');
        }
    }

    public function updateFile(): void
    {

    }
}
