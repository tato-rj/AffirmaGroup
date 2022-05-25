<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function scopeByName($query, $name)
    {
        return $this->where('name', $name)->first();
    }
}
