<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Permission;

class Permissions extends Permission
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'desc',
        'guard_name',
    ];

    public $incrementing = false;
}
