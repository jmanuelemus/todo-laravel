<?php

namespace App\Traits;

trait HasEmailAddress
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function EmailAddress()
    {
        return $this->morphMany('App\Models\EmailAddress', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasEmailAddress::EmailAddress()
     */
    public function getEmailsAttribute()
    {
        return $this->EmailAddress()->get();
    }
}