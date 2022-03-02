<?php

namespace App\Repositories;

use App\Models\stockitem;
use App\Repositories\BaseRepository;

/**
 * Class stockitemRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class stockitemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'administratorid',
        'branchid',
        'product',
        'stocklevel'
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
        return stockitem::class;
    }
}
