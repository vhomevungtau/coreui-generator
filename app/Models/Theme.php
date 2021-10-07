<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Theme
 * @package App\Models
 * @version October 7, 2021, 1:55 pm UTC
 *
 * @property \App\Models\User $user
 * @property string $theme
 * @property integer $sidebar
 * @property integer $option
 */
class Theme extends EloquentModel
{
    public $table = 'themes';

    public $incrementing = false;

    public $timestamps = false;

    public $fillable = [
        'user_id',
        'theme',
        'sidebar',
        'option'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'theme' => 'integer',
        'sidebar' => 'string',
        'option' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

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
            $model->id = IdGenerator::generate(['table' => 'themes', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
