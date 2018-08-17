<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Option
 * @package App\Models
 * @version August 15, 2018, 4:19 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection productCategories
 * @property \Illuminate\Database\Eloquent\Collection productPrices
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property string option_name
 * @property string option_value
 * @property string option_data
 * @property integer created_by
 */
class Option extends Model
{

    public $table = 'options';
    
    protected $primaryKey = 'option_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'option_name',
        'option_value',
        'option_data',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'option_id' => 'integer',
        'option_name' => 'string',
        'option_value' => 'string',
        'option_data' => 'string',
        'created_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
