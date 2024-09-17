<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnotacaoController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assi gned to the "web" middleware group. Make something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/oii',[HomeController::class,'index']);
Route::get('/User',[UserController::class,'index']);
// faz do show
Route::get('anotacaos',[AnotacaoController::class,'index']);
Route::get('anotacao/{id}',[AnotacaoController::class,'show']);
Route::get('anotacao',[AnotacaoController::class,'create']);
Route::post('anotacao',[AnotacaoController::class,'store']);
Route::get('anotacao/{id}/edit',[AnotacaoController::class,'edit'])->name("anotacaoEdit");
Route::get('anotacao/{id}/delete',[AnotacaoController::class,'delete'])->name("anotacaoDelete");
Route::post('anotacao/{id}',[AnotacaoController::class,'update']);
Route::post('anotacao/{id}/delete',[AnotacaoController::class,'delete'])->name('delete');
// Route::post('anotacao/{id}/delete',[AnotacaoController::class,'destroy'])->name('destroy');
Route::get('tarefa',[TarefaController::class,'index']);
