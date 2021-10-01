<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


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
        'name'
    ];

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
        'name' => 'reqiuired|unique'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'user_tag', 'user_id', 'id');
    }
}
