<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class,'index']);
Route::get('/register',[IndexController::class,'register']);
Route::post('/register',[StoreController::class,'register']);
Route::post('/login',AuthController::class);
Route::get('/dashboard',[IndexController::class,'dashboard']);
Route::group(['prefix'=>'/classes'],function(){
    Route::get('manage',[IndexController::class,'manageClasses']);
    Route::delete('/delete/{classId}',[ManageController::class,'deleteClass']);
    Route::post('/update',[ManageController::class,'updateClass']);
    Route::get('/add',[IndexController::class,'addClass']);
    Route::get('/test',[ManageController::class,'test']);
});
