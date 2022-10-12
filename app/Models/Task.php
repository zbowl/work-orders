<?php

namespace App\Models;

use App\Models\Pivots\Comment;
use App\Models\Pivots\WorkOrderTypeTask;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends BaseModel
{
    use HasFactory;

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(WorkOrder::class,WorkOrderTask::class);
    }

    public function workOrderTasks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrderTask::class);
    }

    public function workOrderType(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrderType::class)->using(WorkOrderTypeTask::class);
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Comment::class,'commentable');
    }

}
