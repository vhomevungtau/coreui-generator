<?php

namespace App\Repositories;

use App\Models\Theme;
use App\Repositories\BaseRepository;

/**
 * Class ThemeRepository
 * @package App\Repositories
 * @version October 7, 2021, 1:55 pm UTC
*/

class ThemeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'theme',
        'sidebar',
        'option'
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
        return Theme::class;
    }
}
