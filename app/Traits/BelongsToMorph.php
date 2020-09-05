<?php

namespace App\Traits;

trait BelongsToMorph
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Schema
     */
    public function Object()
    {
        return $this->morphTo('', '_type', '_obj');
    }
}