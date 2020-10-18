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
        //
    ];

    /**
     * The primary key for the model
     * 
     * @var string
     */
    protected $primaryKey = '_id';

    /**
     * Get 'created_at' attribute from the model.
     * 
     * @return \Carbon\Carbon
     */
    public function getCreatedAtAttribute()
    {
        return $this->attributes[self::CREATED_AT];
    }

    /**
     * Set 'created_at' attribute on the model.
     * 
     * @param  \Carbon\Carbon|string  $value
     * @return void
     */    
    public function setCreatedAtAttribute($value)
    {
        $this->attributes[self::CREATED_AT] = $value;
    }

    /**
     * Get 'deleted_at' attribute from the model.
     * 
     * @return \Carbon\Carbon
     */
    public function getDeletedAtAttribute()
    {
        return $this->attributes[self::DELETED_AT];
    }

    /**
     * Set 'deleted_at' attribute on the model.
     * 
     * @param  \Carbon\Carbon|string  $value
     * @return void
     */    
    public function setDeletedAtAttribute($value)
    {
        $this->attributes[self::DELETED_AT] = $value;
    }

    /**
     * Get 'updated_at' attribute from the model.
     * 
     * @return \Carbon\Carbon
     */
    public function getUpdatedAtAttribute()
    {
        return $this->attributes[self::UPDATED_AT];
    }

    /**
     * Set 'updated_at' attribute on the model.
     * 
     * @param  \Carbon\Carbon|string  $value
     * @return void
     */    
    public function setUpdatedAtAttribute($value)
    {
        $this->attributes[self::UPDATED_AT] = $value;
    }

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
