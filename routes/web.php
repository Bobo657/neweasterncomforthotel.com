<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about_us', 'about_us');
Route::view('/contact_us', 'contact_us');
Route::view('/services', 'services');
Route::view('/rooms', 'rooms');
Route::view('/test', 'index');