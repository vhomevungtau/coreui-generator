<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zalo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'name',
        'birthday',
        'gender',
        'picture',
    ];

    public $incrementing = false;

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'zalos', 'length' => 6, 'prefix' => date('y')]);
        });
    }
}
