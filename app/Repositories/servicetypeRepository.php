<?php

namespace App\Repositories;

use App\Models\servicetype;
use App\Repositories\BaseRepository;

/**
 * Class servicetypeRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class servicetypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vehiclecleaning',
        'tyreservice',
        'vehiclepainting',
        'wheelpainting'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return servicetype::class;
    }
}
