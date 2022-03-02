<?php

namespace App\Repositories;

use App\Models\stockorderinvoice;
use App\Repositories\BaseRepository;

/**
 * Class stockorderinvoiceRepository
 * @package App\Repositories
 * @version March 2, 2022, 4:47 pm UTC
*/

class stockorderinvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'deliverystatus',
        'paymentstatus'
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
        return stockorderinvoice::class;
    }
}
