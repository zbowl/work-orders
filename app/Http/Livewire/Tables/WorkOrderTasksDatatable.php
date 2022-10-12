<?php

namespace App\Http\Livewire\Tables;

use App\Models\WorkOrderTask;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class WorkOrderTasksDatatable extends LivewireDatatable
{
    public $name = 'WorkOrderTasksDatatable';
    public $title = 'WorkOrderTasksDatatable';

    private int $workOrderId = 0;

    protected $listeners = [
        'locateWorkOrderTasks'
    ];

    public function builder()
    {
        return WorkOrderTask::query()
            ->where('work_order_id', $this->workOrderId);
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('Id'),
            NumberColumn::name('work_order_id')
                ->label('Work Order Id'),
            Column::name('task.name')
                ->label('Name')
                ->searchable()
                ->filterable(),
            Column::name('task.description')
                ->label('Description'),
            Column::name('form_data')
                ->label('Description')
                ->truncate(8),
            Column::name('completed_by')
                ->label('Completed By')
                ->filterable(),
            DateColumn::name('completed_at')
                ->label('Completed At')
                ->format('l F jS @ g:i a')
                ->filterable(),

        ];
    }

    public function locateWorkOrderTasks(int $workOrderId)
    {
        $this->workOrderId = $workOrderId;
    }
}
