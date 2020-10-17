<?php

namespace App\Traits;

trait HasHoursSpecification
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function HoursSpecification()
    {
        return $this->morphMany('App\Models\HoursSpecification', '', '_type', '_obj');
    }
}