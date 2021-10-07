<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Product
 * @package App\Models
 * @version October 5, 2021, 1:59 am UTC
 *
 * @property integer $name
 * @property string $desc
 * @property integer $number
 * @property number $price
 * @property boolean $publish
 */
class Product extends EloquentModel
{
    use SoftDeletes;


    public $table = 'products';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'desc',
        'number',
        'price',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc' => 'string',
        'publish' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'products', 'length' => 4, 'prefix' => date('y')]);
        });
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }


}
