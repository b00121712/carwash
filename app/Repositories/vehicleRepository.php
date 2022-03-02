<?php

namespace App\Repositories;

use App\Models\vehicle;
use App\Repositories\BaseRepository;

/**
 * Class vehicleRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class vehicleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'branchid',
        'plate',
        'equipment'
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
        return vehicle::class;
    }
}
