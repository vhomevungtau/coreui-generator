<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Profile
 * @package App\Models
 * @version October 10, 2021, 8:44 am +07
 *
 * @property \App\Models\User $user
 * @property string $sms
 * @property string $info
 */
class Profile extends EloquentModel
{

    public $table = 'profiles';

    public $incrementing = false;


    public $fillable = [
        'sms',
        'info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sms' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sms' => 'required|max:50',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'profiles', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
