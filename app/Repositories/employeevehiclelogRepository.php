<?php

namespace App\Repositories;

use App\Models\employeevehiclelog;
use App\Repositories\BaseRepository;

/**
 * Class employeevehiclelogRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class employeevehiclelogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employeeid',
        'vehicleid'
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
        return employeevehiclelog::class;
    }
}
