<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class service
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \App\Models\Customer $customerid
 * @property \App\Models\Corporatecustomer $corporatecustomerid
 * @property \App\Models\Servicetype $servicetypeid
 * @property \Illuminate\Database\Eloquent\Collection $employeeservicelogs
 * @property integer $customerid
 * @property integer $corporatecustomerid
 * @property integer $servicetypeid
 * @property string $servicedate
 * @property time $servicetime
 * @property number $fee
 */
class service extends Model
{


    public $table = 'service';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'customerid',
        'corporatecustomerid',
        'servicetypeid',
        'servicedate',
        'servicetime',
        'fee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customerid' => 'integer',
        'corporatecustomerid' => 'integer',
        'servicetypeid' => 'integer',
        'servicedate' => 'date',
        'fee' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customerid' => 'nullable|integer',
        'corporatecustomerid' => 'nullable|integer',
        'servicetypeid' => 'nullable|integer',
        'servicedate' => 'nullable',
        'servicetime' => 'nullable',
        'fee' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customerid()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customerid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function corporatecustomerid()
    {
        return $this->belongsTo(\App\Models\Corporatecustomer::class, 'corporatecustomerid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function servicetypeid()
    {
        return $this->belongsTo(\App\Models\Servicetype::class, 'servicetypeid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeservicelogs()
    {
        return $this->hasMany(\App\Models\Employeeservicelog::class, 'serviceid');
    }
}
