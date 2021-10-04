<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Color
 * @package App\Models
 * @version October 2, 2021, 10:45 am UTC
 *
 * @property string $name
 */
class Color extends EloquentModel
{
    use SoftDeletes;


    public $table = 'colors';


    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $incrementing = false;

    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:colors'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'colors', 'length' => 6, 'prefix' => date('y')]);
        });
    }


}
