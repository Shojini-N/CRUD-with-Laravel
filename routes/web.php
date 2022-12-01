<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\StudentController;
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

Route::get('/home',[HomeController::class, 'index']);

Route::get('/insert',[HomeController::class, 'insert_data']);

Route::POST('/upload',[HomeController::class, 'upload']);

Route::get('/view',[HomeController::class, 'view_data']);

Route::get('/delete/{id}',[HomeController::class, 'delete']);

Route::get('/update_view/{id}',[HomeController::class, 'update_view']);

Route::POST('/update/{id}',[HomeController::class, 'update']);

Route::POST('/search',[HomeController::class, 'search']);

Route::get('/',function(){
    return view("page1");
});


Route::get('add-data',[StudentController::class, 'addData']);
