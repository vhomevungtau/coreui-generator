<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Tag
 * @package App\Models
 * @version October 1, 2021, 3:42 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $name
 */
class Tag extends EloquentModel
{
    use SoftDeletes;

    public $table = 'tags';


    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $fillable = [
        'name'
    ];

    public $incrementing = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'tags', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
