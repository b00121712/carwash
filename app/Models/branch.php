<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class branch
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $administrators
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property \Illuminate\Database\Eloquent\Collection $stockitems
 * @property \Illuminate\Database\Eloquent\Collection $vehicles
 * @property string $location
 */
class branch extends Model
{


    public $table = 'branch';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'location' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function administrators()
    {
        return $this->hasMany(\App\Models\Administrator::class, 'branchid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class, 'branchid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockitems()
    {
        return $this->hasMany(\App\Models\Stockitem::class, 'branchid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicles()
    {
        return $this->hasMany(\App\Models\Vehicle::class, 'branchid');
    }
}
