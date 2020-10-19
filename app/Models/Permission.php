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
}
