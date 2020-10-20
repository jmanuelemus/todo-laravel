<?php

namespace App\Traits;

trait HasSetting
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Setting()
    {
        return $this->morphMany('App\Models\Setting', '', '_type', '_obj');
    }
}
