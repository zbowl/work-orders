<?php

namespace App\Models;


use App\Models\Pivots\WorkOrderTypeCategory;
use App\Models\Pivots\WorkOrderTypePriority;
use App\Models\Pivots\WorkOrderTypeStatus;
use App\Models\Pivots\WorkOrderTypeTask;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkOrderType extends BaseModel
{
    use HasFactory;

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class)->using(WorkOrderTypeCategory::class);
    }

    public function statuses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Status::class)->using(WorkOrderTypeStatus::class);
    }

    public function priorities(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Priority::class)->using(WorkOrderTypePriority::class);
    }

    public function tasks(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Task::class)->using(WorkOrderTypeTask::class);
    }

}
