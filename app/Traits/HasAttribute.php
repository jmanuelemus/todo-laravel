<?php

namespace App\Traits;

trait HasAttribute
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Attribute()
    {
        return $this->morphMany('App\Attribute', '', '_type', '_obj');
    }
}