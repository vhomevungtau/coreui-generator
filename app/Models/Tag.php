<?php

namespace App\Models;

use Eloquent as Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;


/**
 * Class Tag
 * @package App\Models
 * @version October 1, 2021, 6:45 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $name
 */
class Tag extends EloquentModel
{
    use SoftDeletes;


    public $table = 'tags';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'color'
    ];

    public $incrementing = false;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'color' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:tags,name|min:3,max:50',
        'color'=> 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_tag');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'tags', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
