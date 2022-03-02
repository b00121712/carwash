<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class stockorder
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \App\Models\Supplier $supplierid
 * @property \App\Models\Stockorderinvoice $stockorderinvoiceid
 * @property \Illuminate\Database\Eloquent\Collection $itemorderlogs
 * @property integer $supplierid
 * @property integer $stockorderinvoiceid
 * @property number $amount
 */
class stockorder extends Model
{


    public $table = 'stockorder';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'supplierid',
        'stockorderinvoiceid',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'supplierid' => 'integer',
        'stockorderinvoiceid' => 'integer',
        'amount' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'supplierid' => 'nullable|integer',
        'stockorderinvoiceid' => 'nullable|integer',
        'amount' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function supplierid()
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'supplierid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function stockorderinvoiceid()
    {
        return $this->belongsTo(\App\Models\Stockorderinvoice::class, 'stockorderinvoiceid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itemorderlogs()
    {
        return $this->hasMany(\App\Models\Itemorderlog::class, 'stockorderid');
    }
}
