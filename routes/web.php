<?php

use App\Http\Controllers\buildcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/building',[buildcontroller::class,'build1']);
Route::get('/building/{room}', [buildcontroller::class, 'build2']);