<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class Team extends Schema
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
}
