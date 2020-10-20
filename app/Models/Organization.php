<?php

namespace App\Models;

use App\Traits\HasAccessToken;
use App\Traits\HasAttribute;
use App\Traits\HasEmailAddress;
use App\Traits\HasHoursSpecification;
use App\Traits\HasPhoneNumber;
use App\Traits\HasRole;
use App\Traits\HasSetting;
use App\Traits\HasTeam;
use App\Traits\HasUrl;
use App\Traits\HasUser;

use Schema;

class Organization extends Schema
{
    use HasAccessToken, 
        HasAttribute,
        HasEmailAddress,
        HasHoursSpecification,
        HasPhoneNumber,
        HasRole,
        HasSetting,
        HasTeam,
        HasUrl,
        HasUser;

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
        return $this->belongsTo(Organization::class, '_sup');
    }

    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function subOrganization()
    {
        return $this->hasMany(Organization::class, '_sup');
    }
}
