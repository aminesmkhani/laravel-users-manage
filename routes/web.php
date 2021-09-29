<?php

use App\Http\Controllers\UserController;
use App\Models\Role;
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
     return view('home');
 });

// Users

Route::group(['prefix' => 'panel'], function (){
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
    Route::post('users/{user}/edit',[UserController::class, 'update'])->name('users.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
