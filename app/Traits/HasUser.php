<?php

namespace App\Traits;

trait HasUser
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function User()
    {
        return $this->morphMany('App\Models\User', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasUser::User()
     */
    public function getUsersAttribute()
    {
        return $this->User()->get();
    }
}
