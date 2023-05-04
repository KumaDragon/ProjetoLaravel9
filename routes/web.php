<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/users', [UsersController::class,'index'])->name('users.index');
  //rota usada pra cadastrar, usando formulários
Route::get('/users/create', [UsersController::class,'create'])->name('users.create');
  //a rota chama a controladora, que chama a ação   //users.index é igual a users/index
Route::get('/users/{id}', [UsersController::class,'show'])->name('users.show');
  //rota usada somenta para guardar informações no bd, store
Route::post('/users', [UsersController::class,'store'])->name('users.store');
