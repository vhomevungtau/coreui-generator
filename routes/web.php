<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

// Dashboard
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {


    Route::get('/', [HomeController::class, 'index'])->name('index');

    // User
    Route::resource('users', UserController::class);
    Route::get('/users/{id}/profile',[UserController::class,'getProfile'])->name('users.getprofile');
    Route::put('/users/{id}/profile',[UserController::class,'postProfile'])->name('users.postprofile');

    // Role
    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');

    // Tag
    // Route::resource('tags', TagController::class)->except(['show']);

    // Setting
    // Route::resource('colors', App\Http\Controllers\ColorController::class);

    // Product manager
    Route::resource('products', App\Http\Controllers\ProductController::class)->except(['show']);

    Route::resource('prices', App\Http\Controllers\PriceController::class)->except(['show','create','store']);

    Route::resource('statuses', App\Http\Controllers\StatusController::class)->except(['show']);

    Route::resource('orders', App\Http\Controllers\OrderController::class);

    Route::resource('themes', App\Http\Controllers\ThemeController::class)->only(['index','store']);

    Route::resource('books', App\Http\Controllers\BookController::class)->except(['show','create','store']);

    // Custome route
    Route::get('/products/{id}/price',[ProductController::class,'addPrice'])->name('products.getprice');
    Route::post('/products/price',[ProductController::class,'postPrice'])->name('products.postprice');

    Route::get('/prices/{id}/order',[PriceController::class,'getOrder'])->name('prices.getorder');
    Route::post('/prices/order',[PriceController::class,'postOrder'])->name('prices.postorder');

    Route::get('/orders/{id}/book',[OrderController::class,'getBook'])->name('orders.getbook');
    Route::post('/orders/book',[OrderController::class,'postBook'])->name('orders.postbook');

    Route::resource('templates', App\Http\Controllers\TemplateController::class);

    Route::resource('servers', App\Http\Controllers\ServerController::class)->only(['index','store']);

    Route::resource('profiles', App\Http\Controllers\ProfileController::class)->only(['index','store']);

});
