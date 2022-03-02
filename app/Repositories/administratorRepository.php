<?php

namespace App\Repositories;

use App\Models\administrator;
use App\Repositories\BaseRepository;

/**
 * Class administratorRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:46 pm UTC
*/

class administratorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return administrator::class;
    }
}
