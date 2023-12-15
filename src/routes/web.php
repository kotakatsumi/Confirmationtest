<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DownloadController;

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

Route::get('/',[ContactController::class,'index']);

Route::post('/confirm',[ContactController::class,'confirm']);

Route::get('/confirm/fix',[ContactController::class,'fix']);

Route::post('/thanks',[ContactController::class,'store']);

Route::middleware('auth')->group(function(){Route::get('/admin', [ContactController::class, 'admin']);});

Route::get('/admin/search',[ContactController::class,'search']);

Route::get('/register',[AuthController::class,'registerShow']);

Route::get('/login',[AuthController::class,'loginShow'])->name('login');

Route::post('/admin/delete',[IndexController::class,'delete']);

Route::get('/admin/export',[DownloadController::class,'Download']);
