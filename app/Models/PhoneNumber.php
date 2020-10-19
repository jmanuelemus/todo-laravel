<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Schema;

class PhoneNumber extends Schema
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
        'additional_type',
        'number',
    ];

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'phones';

    /**
     * The string representation for the model.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->number;
    }
}
