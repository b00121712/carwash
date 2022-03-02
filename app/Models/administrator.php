<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class administrator
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \App\Models\Branch $branchid
 * @property \Illuminate\Database\Eloquent\Collection $corporatecustomers
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $stockitems
 * @property integer $branchid
 * @property string $firstname
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $phone
 * @property string $email
 */
class administrator extends Model
{


    public $table = 'administrator';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
    public function branchid()
    {
        return $this->belongsTo(\App\Models\Branch::class, 'branchid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function corporatecustomers()
    {
        return $this->hasMany(\App\Models\Corporatecustomer::class, 'administratorid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'administratorid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockitems()
    {
        return $this->hasMany(\App\Models\Stockitem::class, 'administratorid');
    }
}
