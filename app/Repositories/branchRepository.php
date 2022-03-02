<?php

namespace App\Repositories;

use App\Models\branch;
use App\Repositories\BaseRepository;

/**
 * Class branchRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class branchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'location'
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
        return branch::class;
    }
}
