<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Template
 * @package App\Models
 * @version October 10, 2021, 7:23 am +07
 *
 * @property string $name
 * @property string $desc
 * @property string $content
 */
class Template extends EloquentModel
{

    public $table = 'templates';

    public $incrementing = false;

    public $fillable = [
        'status_id',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status_id' => 'integer',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status_id' => 'required',
        'content' => 'required|max:250'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'templates', 'length' => 6, 'prefix' => date('y')]);
        });
    }


}
