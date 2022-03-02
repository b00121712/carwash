<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employeeservicelog
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \App\Models\Employee $employeeid
 * @property \App\Models\Service $serviceid
 * @property integer $employeeid
 * @property integer $serviceid
 */
class employeeservicelog extends Model
{


    public $table = 'employeeservicelog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'employeeid',
        'serviceid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employeeid' => 'integer',
        'serviceid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employeeid' => 'nullable|integer',
        'serviceid' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employeeid()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employeeid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function serviceid()
    {
        return $this->belongsTo(\App\Models\Service::class, 'serviceid');
    }
}
