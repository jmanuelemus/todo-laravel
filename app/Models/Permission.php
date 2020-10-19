<?php

namespace App\Models;

use Schema;

class Permission extends Schema
{
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
    public function Role()
    {
        return $this->belongsToMany('App\Models\Role', 'role_permissions', '_sup', '_sub')->withTimestamps();
    }
}
