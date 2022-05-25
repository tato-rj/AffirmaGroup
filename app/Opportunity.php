<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $types = ['Temporary', 'Part-time', 'Full-time'];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function getLongNameAttribute()
    {
        return $this->position.', '.$this->field->name.' ('.$this->field->industry->name.')';
    }

    public function getResponsibilitiesAttribute($data)
    {
        return unserialize($data);
    }

    public function getQualificationsAttribute($data)
    {
        return unserialize($data);
    }

    public function types()
    {
        return $this->types;
    }
}
