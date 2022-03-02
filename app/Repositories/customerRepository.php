<?php

namespace App\Repositories;

use App\Models\customer;
use App\Repositories\BaseRepository;

/**
 * Class customerRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class customerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'street',
        'housenumber'
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
        return customer::class;
    }
}
