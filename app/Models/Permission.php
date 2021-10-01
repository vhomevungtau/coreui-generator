<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    use HasFactory, SoftDeletes;

    public $table = 'permissions';

    public $incrementing = false;


    public $fillable = [
        'name',
        'desc',
        'guard_name'
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

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'permissions', 'length' => 6, 'prefix' => date('y')]);
        });
    }


}
