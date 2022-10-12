<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Image extends BaseModel
{
    use HasFactory;

    public function workOrder(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(WorkOrder::class);
    }

    public function imageDetail(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ImageDetails::class);
    }

}
