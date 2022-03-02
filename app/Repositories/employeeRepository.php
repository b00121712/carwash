<?php

namespace App\Repositories;

use App\Models\employee;
use App\Repositories\BaseRepository;

/**
 * Class employeeRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class employeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'administratorid',
        'branchid',
        'firstname',
        'lastname',
        'dateofbirth',
        'phone',
        'email'
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
        return employee::class;
    }
}
