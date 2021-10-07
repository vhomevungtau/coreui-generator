<?php

namespace App\Repositories;

use App\Models\Price;
use App\Repositories\BaseRepository;

/**
 * Class PriceRepository
 * @package App\Repositories
 * @version October 7, 2021, 2:16 am UTC
*/

class PriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'number',
        'price'
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
        return Price::class;
    }
}
