<?php

namespace App;

class Resume extends ArcNet
{
    public function getEmploymentTypeAttribute($data)
    {
        return unserialize($data);
    }

    public function getEmploymentPositionAttribute($data)
    {
        return unserialize($data);
    }

    public function file()
    {
        return storage($this->resume_path);
    }
}
