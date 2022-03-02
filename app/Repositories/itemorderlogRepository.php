<?php

namespace App\Repositories;

use App\Models\itemorderlog;
use App\Repositories\BaseRepository;

/**
 * Class itemorderlogRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class itemorderlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stockorderid',
        'stockitemid',
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
        return itemorderlog::class;
    }
}
