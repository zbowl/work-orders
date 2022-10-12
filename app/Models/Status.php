<?php

namespace App\Models;

use App\Models\Pivots\WorkOrderTypeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Status extends BaseModel
{
    use HasFactory;

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function workOrderTypes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrderType::class)->using(WorkOrderTypeStatus::class);
    }

}
