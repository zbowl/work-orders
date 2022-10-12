<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as LaravelModel;

class BaseModel extends LaravelModel
{

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

}





