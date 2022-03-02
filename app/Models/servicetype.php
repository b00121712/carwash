<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class servicetype
 * @package App\Models
 * @version March 2, 2022, 4:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $services
 * @property string $vehiclecleaning
 * @property string $tyreservice
 * @property string $vehiclepainting
 * @property string $wheelpainting
 */
class servicetype extends Model
{


    public $table = 'servicetype';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'vehiclecleaning',
        'tyreservice',
        'vehiclepainting',
        'wheelpainting'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehiclecleaning' => 'string',
        'tyreservice' => 'string',
        'vehiclepainting' => 'string',
        'wheelpainting' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vehiclecleaning' => 'nullable|string|max:30',
        'tyreservice' => 'nullable|string|max:30',
        'vehiclepainting' => 'nullable|string|max:30',
        'wheelpainting' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'servicetypeid');
    }
}
