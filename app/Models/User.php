<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class User extends Schema
{
    use BelongsToMorph;

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
        'name',
        'password',
    ];
}
