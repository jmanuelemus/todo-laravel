<?php

namespace App\Traits;

trait HasTeam
{
    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Team()
    {
        return $this->morphMany('App\Models\Team', '', '_type', '_obj');
    }

    /**
     * @see \App\Traits\HasTeam::Team()
     */
    public function getTeamsAttribute()
    {
        return $this->Team()->get();
    }
}
