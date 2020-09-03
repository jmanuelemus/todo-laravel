<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Support\Str;

use Schema;

class AccessToken extends Schema
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expiration_date' => 'datetime',
    ];

    /**
     * 
     * 
     * @return void
     */
    protected function __autogenerate()
    {
        $this->attributes['_int'] = mt_rand(100000, 999999);
        $this->attributes['_str'] = Str::random(64);

        $this->expiration_date = Carbon::now()->add( env('APP_TOKEN_LIFETIME', 900), 'seconds');
    }

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->__autogenerate();
    }

    /**
     * The string representation for the model.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->attributes['_str'];
    }

    /**
     * Get the access token's code.
     * 
     * @return int 
     */
    public function getCodeAttribute()
    {
        return $this->attributes['_int'];
    }

    /**
     * Get the access token's string.
     * 
     * @return string
     */
    public function getTokenAttribute()
    {
        return $this->attributes['_str'];
    }
}
