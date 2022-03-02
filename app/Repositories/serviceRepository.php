<?php

namespace App\Repositories;

use App\Models\service;
use App\Repositories\BaseRepository;

/**
 * Class serviceRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class serviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customerid',
        'corporatecustomerid',
        'servicetypeid',
        'servicedate',
        'servicetime',
        'fee'
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
        return service::class;
    }
}
