<?php

namespace App\Repositories;

use App\Models\employeeservicelog;
use App\Repositories\BaseRepository;

/**
 * Class employeeservicelogRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class employeeservicelogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employeeid',
        'serviceid'
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
        return employeeservicelog::class;
    }
}
