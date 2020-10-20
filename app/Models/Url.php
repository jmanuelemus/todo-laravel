<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class Url extends Schema
{
    use BelongsToMorph;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_str',
        'additional_type',
    ];

    /**
     * The string representation for the model.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->attributes['_str'];
    }
}
