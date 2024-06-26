<?php

use App\Http\Controllers\Firstcontroller;
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

Route::get('/', [Firstcontroller::class, 'homepage'])->name('home');
Route::get('/login', [Firstcontroller::class, 'loginpage'])->name('login');

Route::post('/',[Firstcontroller::class, 'register'] )->name('register.post');
Route::post('/login',[Firstcontroller::class, 'login'] )->name('login.post');

Route::get('/welcome' ,[Firstcontroller::class, 'welcome'])->name('welcome');