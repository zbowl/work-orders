<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Relations\MorphPivot;

class Comment extends MorphPivot
{

    public function commentable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

}
