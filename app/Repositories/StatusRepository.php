<?php

namespace App\Repositories;

use App\Models\Status;
use App\Repositories\BaseRepository;

/**
 * Class StatusRepository
 * @package App\Repositories
 * @version October 10, 2021, 3:50 pm +07
*/

class StatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'name',
        'desc'
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
        return Status::class;
    }
}
