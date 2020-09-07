<?php

namespace App;

use Schema;

class EmailAddress extends Schema
{
    use Traits\BelongsToMorph;

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
    ];

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'emails';
}
