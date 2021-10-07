<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Status
 * @package App\Models
 * @version October 7, 2021, 8:04 am UTC
 *
 * @property string $name
 * @property string $desc
 * @property string $color
 */
class Status extends EloquentModel
{


    public $table = 'statuses';




    public $fillable = [
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
        'name' => 'string',
        'desc' => 'string',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required',
        'color' => 'required'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }


}
