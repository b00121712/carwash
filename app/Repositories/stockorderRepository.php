<?php

namespace App\Repositories;

use App\Models\stockorder;
use App\Repositories\BaseRepository;

/**
 * Class stockorderRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class stockorderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'supplierid',
        'stockorderinvoiceid',
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
        return stockorder::class;
    }
}
