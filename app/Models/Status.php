<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Status
 * @package App\Models
 * @version October 10, 2021, 3:50 pm +07
 *
 * @property \App\Models\Template $template
 * @property string $type
 * @property string $name
 * @property string $desc
 */
class Status extends EloquentModel
{
    use SoftDeletes;


    public $table = 'statuses';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'name',
        'desc',
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'name' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required',
        'name' => 'required',
        'desc' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function template()
    {
        return $this->hasOne(Template::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'statuses', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
