<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Server
 * @package App\Models
 * @version October 10, 2021, 8:19 am +07
 *
 * @property string $url
 * @property string $key
 * @property integer $devices
 * @property string $type
 * @property integer $prioritize
 * @property string $schedule
 * @property string $attachments
 */
class Server extends EloquentModel
{


    public $table = 'servers';

    public $fillable = [
        'url',
        'key',
        'devices',
        'type',
        'prioritize',
        'schedule',
        'attachments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'key' => 'string',
        'devices' => 'string',
        'type' => 'string',
        'prioritize' => 'integer',
        'schedule' => 'datetime',
        'attachments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'key' => 'required',
        'devices' => 'required',
    ];


}
