<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Order
 * @package App\Models
 * @version October 7, 2021, 8:16 am UTC
 *
 * @property \App\Models\Product $id
 * @property \App\Models\User $id
 * @property \Illuminate\Database\Eloquent\Collection $statuses
 * @property integer $product_id
 * @property integer $user_id
 * @property integer $status_id
 * @property number $discount
 */
class Order extends EloquentModel
{
    use SoftDeletes;


    public $table = 'orders';


    protected $dates = ['deleted_at'];

    public $incrementing = false;

    public $fillable = [
        'price_id',
        'user_id',
        'status_id',
        'discount',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'price_id' => 'integer',
        'user_id' => 'integer',
        'status_id' => 'integer',
        'discount' => 'double',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'price_id' => 'required',
        'user_id' => 'required',
        'status_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'orders', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
