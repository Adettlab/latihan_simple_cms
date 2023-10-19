<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   return redirect ('login');
});

Auth::routes();


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dasboard', [DasboardController::class, 'index'])->middleware('auth');
Route::get('/users', [UsersController::class, 'index'])->middleware('auth');
// Route::get('/dasboard/create', [DasboardController::class, 'create'])->middleware('auth');
// Route::post('/dasboard/post', [DasboardController::class, 'store'])->middleware('auth');
// Route::post('/dasboard/post', [DasboardController::class, 'destroy'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'tambah']);

Route::resource('/dasboard/post', DasboardController::class)->Middleware('auth');
Route::delete('/dasboard/{berita}', [DasboardController::class,'destroy'])->name('delete')->Middleware('auth');
Route::get('/dasboard/{berita}', [DasboardController::class,'edit'])->name('edit')->Middleware('auth');
Route::patch('/dasboard/{berita}', [DasboardController::class,'update'])->name('update')->Middleware('auth');


