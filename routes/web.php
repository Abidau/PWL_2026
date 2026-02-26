<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a18a7640cf5bcf290aa6d60f7ebc98c33e640a74
