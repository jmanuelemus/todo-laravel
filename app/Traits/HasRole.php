<?php

namespace App\Traits;

trait HasRole
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Role()
    {
        return $this->morphMany('App\Models\Role', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasRole::Role()
     */
    public function getRolesAttribute()
    {
        return $this->Role()->get();
    }
}