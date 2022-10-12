<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class ImageDetails extends BaseModel
{
    use HasFactory;

    public function image(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

}
