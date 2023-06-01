<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {return view('welcome');});
Route::get('/users', [UsersController::class,'index'])->name('users.index');
  //rota usada pra cadastrar, usando formulários
Route::get('/users/create', [UsersController::class,'create'])->name('users.create');
          //há dois parâmetros, divididos por virgula, sendo o primeiro a URL pra procurar, a segunda é a classe, que tem que achar a ação    
          //a rota chama a controladora, que chama a ação   //users.index é igual a users/index
Route::get('/users/{id}', [UsersController::class,'show'])->name('users.show');
  //rota usada somenta para guardar informações no bd, store
Route::put('/users/{id}', [UsersController::class,'update'])->name('users.update');
  //rota usada para o botão de atualizar, para poder atualizar através da função do edit
Route::get('/users/{id}/edit', [UsersController::class,'edit'])->name('users.edit');
  //rota usada para a função editar
Route::delete('/users/{id}/delete', [UsersController::class,'destroy'])->name('users.destroy');
  //rota usada para a função excluir
Route::post('/users', [UsersController::class,'store'])->name('users.store');
  /* vai salvar as infos aqui, preparar pra poder mandar pra controladora, pra mandar pro bd */

