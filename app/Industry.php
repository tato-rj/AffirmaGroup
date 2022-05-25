<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    public function scopeByName($query, $name)
    {
        return $this->where('name', $name)->first();
    }
}
