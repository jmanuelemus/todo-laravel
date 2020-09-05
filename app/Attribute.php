<?php

namespace App;

use Schema;

class Attribute extends Schema
{
    use Traits\BelongsToMorph;

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
