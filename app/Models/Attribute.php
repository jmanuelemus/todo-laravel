<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class Attribute extends Schema
{
    use BelongsToMorph;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_att',
        'value',
    ];
}
