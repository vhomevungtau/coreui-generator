<?php

namespace App\Models;

use DateTimeInterface;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'password',
    ];

    public $incrementing = false;

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'user_tag');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function theme()
    {
        return $this->hasOne(Theme::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'users', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
