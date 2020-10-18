<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Support\Str;

use Schema;

class AccessToken extends Schema
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'code',
        'token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expiration_date' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_int',
        '_str',
    ];

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
     * Set the access token's code.
     * 
     * @return void 
     */
    protected function setCodeAttribute()
    {
        return $this->attributes['_int'] = mt_rand(100000, 999999);
    }

    /**
     * Set the access token's expiration date.
     * 
     * @return void
     */
    protected function setExpirationDate()
    {
        $this->expiration_date = Carbon::now()->add(self::lifetime(), 'seconds');
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

    /**
     * Set the access token's string.
     * 
     * @return void
     */
    public function setTokenAttribute()
    {
        $this->attributes['_str'] = Str::random(64);
    }

    /**
     * 
     * @return void
     */
    protected function __autogenerate()
    {
        $this->setCodeAttribute(); $this->setTokenAttribute(); 
        
        $this->setExpirationDate();
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
     * Expire and delete the access token
     * 
     * @return void
     */
    public function expire()
    {
        $this->expiration_date = $this->deleted_at = Carbon::now();

        return $this->save();
    }

    /**
     * Extend the access token's lifetime
     * 
     * @see \App\Models\AccessToken::setExpirationDate()
     */
    public function extend()
    {
        $this->setExpirationDate();

        return $this->save();
    }

    /**
     * Return the access token's lifetime
     * 
     * @return integer
     */
    public static function lifetime()
    {
        return env('APP_TOKEN_LIFETIME', 900);
    }
}
