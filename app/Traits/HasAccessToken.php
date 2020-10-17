<?php

namespace App\Traits;

trait HasAccessToken
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function HasAccessToken()
    {
        return $this->morphMany('App\Models\AccessToken', '', '_type', '_obj');
    }
}