<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class customer
 * @package App\Models
 * @version March 2, 2022, 4:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $services
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string $street
 * @property integer $housenumber
 */
class customer extends Model
{


    public $table = 'customer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'street',
        'housenumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'street' => 'string',
        'housenumber' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'lastname' => 'nullable|string|max:30',
        'phone' => 'nullable|string|max:30',
        'email' => 'nullable|string|max:30',
        'street' => 'nullable|string|max:30',
        'housenumber' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'customerid');
    }
}
