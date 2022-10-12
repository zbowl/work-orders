<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;



class InventoryAsset extends BaseModel
{
    use HasFactory;

    public function materials(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Material::class);
    }

}
