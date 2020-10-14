<?php

namespace App\Models;

use Carbon\Carbon;

use Schema;

class HoursSpecification extends Schema
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'valid_from' => 'datetime:Y-m-d',
        'valid_through' => 'datetime:Y-m-d',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'closes',
        'day_of_week',
        'opens',
        'valid_from',
        'valid_through',
    ];

    /**
     * Get the closing time.
     * 
     * @return string
     */
    public function getClosesAttribute()
    {
        return Carbon::parse($this->attributes['closes'])->format('H:i');
    }

    /**
     * Set the closing time.
     * 
     * @param  string $value
     * @return void
     */
    public function setClosesAttribute($value)
    {
        $this->attributes['closes'] = Carbon::parse($value);
    }

    /**
     * Get the day of week
     * 
     * @return int
     */
    public function getDayOfWeekAttribute()
    {
        return (($dayOfWeek = $this->attributes['day_of_week']) == 7) ? 0 : $dayOfWeek;
    }

    /**
     * @param  int $value
     * @return void
     */
    public function setDayOfWeekAttribute($value)
    {
        $this->attributes['day_of_week'] = ($value === 0) ? 7 : $value;
    }

    /**
     * Get the opening time.
     * 
     * @return string
     */
    public function getOpensAttribute()
    {
        return Carbon::parse($this->attributes['opens'])->format('H:i');
    }

    /**
     * Set the opening time.
     * 
     * @param  string $value
     * @return void
     */
    public function setOpensAttribute($value)
    {
        $this->attributes['opens'] = Carbon::parse($value);
    }
}
