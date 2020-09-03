<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schema extends Model
{
    use SoftDeletes;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = '_created_at';

    /**
     * The name of the "deleted at" column.
     *
     * @var string
     */
    const DELETED_AT = '_deleted_at';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = '_updated_at';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        '_created_at' => 'datetime',
        '_updated_at' => 'datetime',
        '_deleted_at' => 'datetime',
    ];

    /**
     * The primary key for the model
     * 
     * @var string
     */
    protected $primaryKey = '_id';

    /**
     * Get 'id' attribute from the model.
     * 
     * @return string
     */
    public function getIdAttribute()
    {
        return $this->attributes[$this->primaryKey];
    }

    /**
     * Set 'id' attribute on the model.
     * 
     * @param  string  $value
     * @return void
     */    
    public function setIdAttribute($value)
    {
        $this->attributes[$this->primaryKey] = $value;
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
    }
}
