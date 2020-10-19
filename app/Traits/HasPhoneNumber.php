<?php

namespace App\Traits;

trait HasPhoneNumber
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function PhoneNumber()
    {
        return $this->morphMany('App\Models\PhoneNumber', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasEmailAddress::EmailAddress()
     */
    public function getPhonesAttribute()
    {
        return $this->PhoneNumber()->get();
    }
}