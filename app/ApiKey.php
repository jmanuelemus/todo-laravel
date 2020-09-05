<?php

namespace App;

use Illuminate\Support\Str;

use Schema;

class ApiKey extends Schema
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_published' => 'datetime',
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_str',
    ];

    /**
     * @return void
     */
    protected function __autogenerate()
    {
        $this->setKeyAttribute();
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
     * Get the API key's string.
     * 
     * @return int 
     */
    public function getKeyAttribute()
    {
        return $this->attributes['_str'];
    }

    /**
     * Set the API key's string.
     * 
     * @return int 
     */
    public function setKeyAttribute()
    {
        $this->attributes['_str'] = Str::random(64);
    }
}
