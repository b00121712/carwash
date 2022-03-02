<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employee
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \App\Models\Administrator $administratorid
 * @property \App\Models\Branch $branchid
 * @property \Illuminate\Database\Eloquent\Collection $employeeservicelogs
 * @property \Illuminate\Database\Eloquent\Collection $employeevehiclelogs
 * @property integer $administratorid
 * @property integer $branchid
 * @property string $firstname
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $phone
 * @property string $email
 */
class employee extends Model
{


    public $table = 'employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'administratorid',
        'branchid',
        'firstname',
        'lastname',
        'dateofbirth',
        'phone',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'administratorid' => 'integer',
        'branchid' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'dateofbirth' => 'date',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'administratorid' => 'nullable|integer',
        'branchid' => 'nullable|integer',
        'firstname' => 'nullable|string|max:30',
        'lastname' => 'nullable|string|max:30',
        'dateofbirth' => 'nullable',
        'phone' => 'nullable|string|max:30',
        'email' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function administratorid()
    {
        return $this->belongsTo(\App\Models\Administrator::class, 'administratorid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function branchid()
    {
        return $this->belongsTo(\App\Models\Branch::class, 'branchid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeeservicelogs()
    {
        return $this->hasMany(\App\Models\Employeeservicelog::class, 'employeeid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employeevehiclelogs()
    {
        return $this->hasMany(\App\Models\Employeevehiclelog::class, 'employeeid');
    }
}
