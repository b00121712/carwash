<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class supplier
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $stockorders
 * @property string $suppliername
 * @property string $product
 * @property number $amount
 */
class supplier extends Model
{


    public $table = 'supplier';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'suppliername',
        'product',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'suppliername' => 'string',
        'product' => 'string',
        'amount' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'suppliername' => 'nullable|string|max:30',
        'product' => 'nullable|string|max:30',
        'amount' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockorders()
    {
        return $this->hasMany(\App\Models\Stockorder::class, 'supplierid');
    }
}
