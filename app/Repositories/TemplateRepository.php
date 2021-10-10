<?php

namespace App\Repositories;

use App\Models\Template;
use App\Repositories\BaseRepository;

/**
 * Class TemplateRepository
 * @package App\Repositories
 * @version October 10, 2021, 7:23 am +07
*/

class TemplateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'content'
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
        return Template::class;
    }
}
