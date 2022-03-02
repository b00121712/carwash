<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class vehicle
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \App\Models\Branch $branchid
 * @property \Illuminate\Database\Eloquent\Collection $employeevehiclelogs
 * @property integer $branchid
 * @property string $plate
 * @property string $equipment
 */
class vehicle extends Model
{


    public $table = 'vehicle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'branchid',
        'plate',
        'equipment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'branchid' => 'integer',
        'plate' => 'string',
        'equipment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'branchid' => 'nullable|integer',
        'plate' => 'nullable|string|max:30',
        'equipment' => 'nullable|string|max:30'
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
    public function employeevehiclelogs()
    {
        return $this->hasMany(\App\Models\Employeevehiclelog::class, 'vehicleid');
    }
}
