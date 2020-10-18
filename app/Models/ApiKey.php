<?php

namespace App\Models;

use Carbon\Carbon;

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
        'date_published',
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
     * Disable API key
     * 
     * @return void
     */
    public function disable()
    {
        $this->date_published = null;

        return $this->save();
    }

    /**
     * Publish API key
     * 
     * @return void
     */
    public function publish()
    {
        $this->date_published = Carbon::now()->format('Y-m-d H:i:s');

        return $this->save();
    }
}
