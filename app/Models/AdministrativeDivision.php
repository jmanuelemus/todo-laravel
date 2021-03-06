<?php

namespace App\Models;

use App\Traits\NestedSet;

use Schema;

class AdministrativeDivision extends Schema
{
    use NestedSet;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        '_alias' => 'json',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_alias',
        '_type',
        'identifier',
        'name',
        'postal_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_lft',
        '_rgt',
    ];

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'administrative_divisions';

    /**
     * Get the results of the relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function geoContains()
    {
        return $this->hasMany(AdministrativeDivision::class, '_sup');
    }

    /**
     * Get the results of the relationship.
     * 
     * @return \App\AdministrativeDivision
     */
    public function geoWithin()
    {
        return $this->belongsTo(AdministrativeDivision::class, '_sup');
    }
}
