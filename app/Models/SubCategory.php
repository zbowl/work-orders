<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class SubCategory extends BaseModel
{
    use HasFactory;

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault(function ($category, $subCategory) {
            $category->name = 'Orphan Sub Category';
        });
    }

}
