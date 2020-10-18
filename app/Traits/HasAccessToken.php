<?php

namespace App\Traits;

trait HasAccessToken
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function AccessToken()
    {
        return $this->morphMany('App\Models\AccessToken', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasAccessToken::AccessToken()
     */
    public function getAccessTokensAttribute()
    {
        return $this->AccessToken()->get();
    }
}