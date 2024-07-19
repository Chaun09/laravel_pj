<?php

use App\Http\Controllers\Adminpanel;
use Illuminate\Support\Facades\Route;


Route::get('/', [Adminpanel::class, 'index']);
Route::resource('posts', Adminpanel::class);

Route::get('/', function () {
    return view('welcome');
});
