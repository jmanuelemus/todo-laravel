<?php

namespace App\Models;

use App\Traits\HasAccessToken;
use App\Traits\HasAttribute;
use App\Traits\HasEmailAddress;
use App\Traits\HasHoursSpecification;

use Schema;

class Organization extends Schema
{
    use HasAccessToken, 
        HasAttribute,
        HasEmailAddress,
        HasHoursSpecification;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'verified_at' => 'datetime',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_cctld',
        'name',
    ];

    /**
     * Get the results of the relationship.
     * 
     * @return \App\Models\Organization
     */
    public function parentOrganization()
    {
        return $this->belongsTo('App\Models\Organization', '_sup');
    }

    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function subOrganization()
    {
        return $this->hasMany('App\Models\Organization', '_sup');
    }
}
