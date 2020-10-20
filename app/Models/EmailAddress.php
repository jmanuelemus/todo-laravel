<?php

namespace App\Models;

use App\Traits\BelongsToMorph;
use App\Traits\HasSetting;

use Schema;

class EmailAddress extends Schema
{
    use BelongsToMorph,
        HasSetting;

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
        'additional_type',
        'name',
    ];

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'emails';

    /**
     * The string representation for the model.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
