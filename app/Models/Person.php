<?php

namespace App\Models;

use App\Traits\HasAccessToken;
use App\Traits\HasAttribute;
use App\Traits\HasEmailAddress;
use App\Traits\HasPhoneNumber;
use App\Traits\HasSetting;
use App\Traits\HasUrl;
use App\Traits\HasUser;

use Schema;

class Person extends Schema
{
    use HasAccessToken, 
        HasAttribute,
        HasEmailAddress,
        HasPhoneNumber,
        HasSetting,
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
        'alternate_name',
        'family_name',
        'given_name',
    ];
}
