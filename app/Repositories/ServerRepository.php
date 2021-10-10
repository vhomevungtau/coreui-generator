<?php

namespace App\Repositories;

use App\Models\Server;
use App\Repositories\BaseRepository;

/**
 * Class ServerRepository
 * @package App\Repositories
 * @version October 10, 2021, 8:19 am +07
*/

class ServerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'key',
        'devices',
        'type',
        'prioritize',
        'schedule',
        'attachments'
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
        return Server::class;
    }
}
