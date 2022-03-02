<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class itemorderlog
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \App\Models\Stockorder $stockorderid
 * @property \App\Models\Stockitem $stockitemid
 * @property integer $stockorderid
 * @property integer $stockitemid
 * @property number $amount
 */
class itemorderlog extends Model
{


    public $table = 'itemorderlog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'stockorderid',
        'stockitemid',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'stockorderid' => 'integer',
        'stockitemid' => 'integer',
        'amount' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'stockorderid' => 'nullable|integer',
        'stockitemid' => 'nullable|integer',
        'amount' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function stockorderid()
    {
        return $this->belongsTo(\App\Models\Stockorder::class, 'stockorderid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function stockitemid()
    {
        return $this->belongsTo(\App\Models\Stockitem::class, 'stockitemid');
    }
}
