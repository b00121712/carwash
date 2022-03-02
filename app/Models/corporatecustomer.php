<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class corporatecustomer
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \App\Models\Administrator $administratorid
 * @property \Illuminate\Database\Eloquent\Collection $services
 * @property integer $administratorid
 * @property string $firmname
 * @property number $numberofvehicles
 */
class corporatecustomer extends Model
{


    public $table = 'corporatecustomer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'administratorid',
        'firmname',
        'numberofvehicles'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'administratorid' => 'integer',
        'firmname' => 'string',
        'numberofvehicles' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'administratorid' => 'nullable|integer',
        'firmname' => 'nullable|string|max:30',
        'numberofvehicles' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function administratorid()
    {
        return $this->belongsTo(\App\Models\Administrator::class, 'administratorid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'corporatecustomerid');
    }
}
