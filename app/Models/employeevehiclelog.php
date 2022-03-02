<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employeevehiclelog
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \App\Models\Employee $employeeid
 * @property \App\Models\Vehicle $vehicleid
 * @property integer $employeeid
 * @property integer $vehicleid
 */
class employeevehiclelog extends Model
{


    public $table = 'employeevehiclelog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'employeeid',
        'vehicleid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employeeid' => 'integer',
        'vehicleid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employeeid' => 'nullable|integer',
        'vehicleid' => 'nullable|integer'
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
    public function vehicleid()
    {
        return $this->belongsTo(\App\Models\Vehicle::class, 'vehicleid');
    }
}
