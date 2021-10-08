<?php

namespace App\Models;

use DateTimeInterface;
use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Book
 * @package App\Models
 * @version October 8, 2021, 2:23 am UTC
 *
 * @property \App\Models\Order $order
 * @property \App\Models\Status $status
 * @property integer $order_id
 * @property integer $status_id
 * @property string $time
 * @property string $content
 */
class Book extends EloquentModel
{
    use SoftDeletes;


    public $table = 'books';


    protected $dates = ['deleted_at'];

    public $incrementing = false;

    public $fillable = [
        'order_id',
        'status_id',
        'time',
        'date',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'status_id' => 'integer',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'status_id' => 'required',
        'time' => 'required',
        'date' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'books', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
