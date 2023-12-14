<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('showtask', [TaskController::class,'showtask'])->name('showtask');
    Route::get('createtaskpage', [TaskController::class,'createtaskpage'])->name('createtaskpage');
    Route::post('createtask', [TaskController::class,'createtask'])->name('createtask');
    Route::get('edittaskpage/{id}', [TaskController::class,'edittaskpage'])->name('edittaskpage');
    Route::post('updatetask', [TaskController::class,'updatetask'])->name('updatetask');
    Route::get('deletetask/{id}', [TaskController::class,'deletetask'])->name('deletetask');
   
    Route::get('registerpage', [LoginController::class,'registerpage'])->name('registerpage');
    Route::post('register', [LoginController::class,'register'])->name('register');
    Route::get('logout', [LoginController::class,'logout'])->name('logout');   
});
Route::get('/', [LoginController::class,'loginpage'])->name('loginpage');
Route::post('login', [LoginController::class,'login'])->name('login');
