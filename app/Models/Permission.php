<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as ModelsPermission;

/**
 * Class Permission
 * @package App\Models
 * @version September 30, 2021, 2:19 pm UTC
 *
 * @property string $name
 * @property string $desc
 */
class Permission extends ModelsPermission
{


    public $table = 'permissions';




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
