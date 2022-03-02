<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class stockorderinvoice
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $stockorders
 * @property string $deliverystatus
 * @property string $paymentstatus
 */
class stockorderinvoice extends Model
{


    public $table = 'stockorderinvoice';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'deliverystatus',
        'paymentstatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deliverystatus' => 'string',
        'paymentstatus' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'deliverystatus' => 'nullable|string|max:30',
        'paymentstatus' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockorders()
    {
        return $this->hasMany(\App\Models\Stockorder::class, 'stockorderinvoiceid');
    }
}
