<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('posts', HomeController::class );

