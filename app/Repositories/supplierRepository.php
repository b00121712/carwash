<?php

namespace App\Repositories;

use App\Models\supplier;
use App\Repositories\BaseRepository;

/**
 * Class supplierRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class supplierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'suppliername',
        'product',
        'amount'
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
        return supplier::class;
    }
}
