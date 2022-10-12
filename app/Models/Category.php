<?php

namespace App\Models;

use App\Models\Pivots\WorkOrderTypeCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Category extends BaseModel
{
    use HasFactory;

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkOrder::class);
    }

    public function workOrderTypes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrderType::class)->using(WorkOrderTypeCategory::class);
    }

    public function subCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

}
