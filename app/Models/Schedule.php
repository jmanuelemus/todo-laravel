<?php

namespace App\Models;

use App\Traits\BelongsToMorph;

use Carbon\Carbon;

use Schema;

class Schedule extends Schema
{
    use BelongsToMorph;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'end_date' => 'datetime:Y-m-d',
        'start_date' => 'datetime:Y-m-d',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'by_day',
        'by_month',
        'by_month_day',
        'by_month_week',
        'end_date',
        'end_time',
        'start_date',
        'start_time',
    ];

    /**
     * Get the day of week
     * 
     * @return int
     */
    public function getByDayAttribute()
    {
        return (($dayOfWeek = $this->attributes['by_day']) == 7) ? 0 : $dayOfWeek;
    }

    /**
     * Set the day of week
     * 
     * @param  int $value
     * @return void
     */
    public function setByDayAttribute($value)
    {
        $this->attributes['by_day'] = ($value === 0) ? 7 : $value;
    }

    /**
     * Get the end time.
     * 
     * @return string
     */
    public function getEndTimeAttribute()
    {
        return Carbon::parse($this->attributes['end_time'])->format('H:i:s');
    }

    /**
     * Set the end time.
     * 
     * @param  string $value
     * @return void
     */
    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = Carbon::parse($value);
    }

    /**
     * Get the start time.
     * 
     * @return string
     */
    public function getStartTimeAttribute()
    {
        return Carbon::parse($this->attributes['start_time'])->format('H:i:s');
    }

    /**
     * Set the start time.
     * 
     * @param  string $value
     * @return void
     */
    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = Carbon::parse($value);
    }
}
