<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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


Route::get('/', [TodosController::class, "liste"]);
Route::post('/action/add', [TodosController::class, "saveTodo"]);
Route::get('/action/done/{id}', [TodosController::class, "markAsDone"]);
Route::get('/action/delete/{id}', [TodosController::class, "deleteTodo"]);
Route::get('/about', [TodosController::class, "about"]);