<h1 align="center"><img src="https://assets.infyom.com/open-source/infyom-logo.png" alt="InfyOm"></h1>

CoreUI Generator
==========================

php artisan key:generate 

Spatie Permission
==========================

https://spatie.be/docs/laravel-permission/v5/installation-laravel

ID generate
==========================

https://laravelarticle.com/laravel-custom-id-generator

$input['id'] = IdGenerator::generate(['table' => 'roles', 'length' => 6, 'prefix' => date('y')]);

public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'users', 'length' => 10, 'prefix' => date('y')]);
        });
    }


