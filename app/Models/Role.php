<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class Role extends Schema
{
    use BelongsToMorph;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function Permission()
    {
        return $this->belongsToMany('App\Models\Permission', 'role_permissions', '_sub', '_sup')->withTimestamps();
    }

    /**
     * @see \App\Models\Role::Permission()
     */
    public function getPermissionsAttribute()
    {
        return $this->Permission()->get();
    }
}
