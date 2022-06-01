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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/request/add', [App\Http\Controllers\RequestController::class, 'index'])->name('add_request');
Route::post('/request_create',[App\Http\Controllers\RequestController::class, 'create'])->name('create_request');
Route::get('/requests', [App\Http\Controllers\RequestController::class, 'show'])->name('show_requests');
//Route::post('/request_create',[App\Http\Controllers\RequestController::class, 'create'])->name('create_request');


//Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register_');

