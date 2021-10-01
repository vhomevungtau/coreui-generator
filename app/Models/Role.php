<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Spatie\Permission\Models\Role as ModelsRole;

/**
 * Class Role
 * @package App\Models
 * @version September 30, 2021, 2:17 pm UTC
 *
 * @property string $name
 * @property string $desc
 */
class Role extends ModelsRole
{

    public $table = 'roles';

    public $fillable = [
        'name',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required'
    ];


}
