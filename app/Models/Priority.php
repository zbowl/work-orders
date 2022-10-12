<?php

namespace App\Models;

use App\Models\Pivots\WorkOrderTypePriority;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Priority extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'order'];

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function workOrderTypes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrderType::class)->using(WorkOrderTypePriority::class);
    }

}
