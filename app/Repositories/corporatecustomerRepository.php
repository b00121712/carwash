<?php

namespace App\Repositories;

use App\Models\corporatecustomer;
use App\Repositories\BaseRepository;

/**
 * Class corporatecustomerRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class corporatecustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'administratorid',
        'firmname',
        'numberofvehicles'
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
        return corporatecustomer::class;
    }
}
