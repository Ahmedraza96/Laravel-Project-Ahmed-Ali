<?php

use App\Http\Controllers\mycontroller;
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

Route::get('/', [mycontroller::class , 'index']) ;
Route::post('/insert', [mycontroller::class , 'insert']) ;
Route::get('/editform', [mycontroller::class , 'updateordelete']) ;
Route::get('/update', [mycontroller::class , 'update']) ;
Route::get('/section', [mycontroller::class , 'section']) ;
Route::get('/booking', [mycontroller::class , 'booking']) ;
Route::get('/admindashboard', [mycontroller::class , 'admindashboard']) ;

// Registeration of the USER

Route::get('/register', [mycontroller::class, 'viewRegister']);
Route::get('/registerNew', [mycontroller::class, 'registerNew']);

// Registeration of the LOGIN

Route::get('/user', [mycontroller::class, 'login']);
Route::get('/login', [mycontroller::class, 'successfully']);

// ADMIN LOGIN

Route::get('/userAdmin', [mycontroller::class, 'adminLogin']);
Route::get('/loginuser', [mycontroller::class, 'login']);
Route::get('/admin', [mycontroller::class, 'adminsuccessfully']);
