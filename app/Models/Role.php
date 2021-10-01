<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Spatie\Permission\Models\Role as ModelsRole;
use Illuminate\Database\Eloquent\Model as EloquentModel;

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

    public $incrementing = false;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'roles', 'length' => 6, 'prefix' => date('y')]);
        });
    }


}
