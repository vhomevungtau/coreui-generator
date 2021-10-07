<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Price
 * @package App\Models
 * @version October 7, 2021, 2:16 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $product_id
 * @property integer $number
 * @property integer $price
 */
class Price extends EloquentModel
{
    use SoftDeletes;


    public $table = 'prices';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'number',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'number' => 'integer',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'number' => 'required',
        'price' => 'required'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'prices', 'length' => 4, 'prefix' => date('y')]);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
