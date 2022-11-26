<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
Route::view('/about','about');
Route::view('/gallery','gallery');
Route::view('/blog','blog');
Route::view('/academics','academics');
Route::view('/curriculamvite','curriculamvite');
Route::view('/publications','publications');
Route::view('/projects','projects');
Route::view('/books','books');
Route::view('/recitation','recitation');
Route::view('/initiatives','initiatives');
Route::view('/dashboard','dashboard');
