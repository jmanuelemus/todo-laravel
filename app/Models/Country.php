<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Country extends AdministrativeDivision
{
    /**
     * The "booting" method of the model.
     * 
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('cctld', function(Builder $builder) {
            $builder->where('_type', 'Country');
        });
    }
}
