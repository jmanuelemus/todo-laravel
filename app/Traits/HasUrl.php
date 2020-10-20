<?php

namespace App\Traits;

trait HasUrl
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Url()
    {
        return $this->morphMany('App\Models\Url', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasUrl::Url()
     */
    public function getUrlsAttribute()
    {
        return $this->Url()->get();
    }
}
