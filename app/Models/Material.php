<?php

namespace App\Models;

use App\Models\Pivots\WorkOrderMaterial;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends BaseModel
{
    use HasFactory;

    public function inventoryAsset(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InventoryAsset::class);
    }

    public function budget(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Budget::class);
    }

    public function workOrders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(WorkOrder::class);
    }

}
