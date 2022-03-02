<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class stockitem
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \App\Models\Administrator $administratorid
 * @property \App\Models\Branch $branchid
 * @property \Illuminate\Database\Eloquent\Collection $itemorderlogs
 * @property integer $administratorid
 * @property integer $branchid
 * @property string $product
 * @property number $stocklevel
 */
class stockitem extends Model
{


    public $table = 'stockitem';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'administratorid',
        'branchid',
        'product',
        'stocklevel'
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
        'product' => 'string',
        'stocklevel' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'administratorid' => 'nullable|integer',
        'branchid' => 'nullable|integer',
        'product' => 'nullable|string|max:30',
        'stocklevel' => 'nullable|numeric'
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
    public function itemorderlogs()
    {
        return $this->hasMany(\App\Models\Itemorderlog::class, 'stockitemid');
    }
}
