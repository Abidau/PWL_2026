<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

// Route::get('/user/{name?', function ($name = 'John') {
//     return 'Nama Saya ' . $name;
// });

// Route::resource('photos', PhotoController::class) ->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class) ->except([
//     'create', 'store', 'update', 'destroy',
// ]);

// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/greeting', function () {
//     return view ('blog.hello', ['name' => 'Andi']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);