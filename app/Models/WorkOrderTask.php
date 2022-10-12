<?php

namespace App\Models;

use App\Models\Pivots\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrderTask extends Model
{
    use HasFactory;

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrder::class);
    }

    public function task(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Comment::class,'commentable');
    }

}
