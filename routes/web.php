<?php

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

Route::get('', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/validate_login', [\App\Http\Controllers\AuthController::class, 'validate_login'])->name('validate_login');


Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/author', [\App\Http\Controllers\AuthorController::class, 'index']);
    Route::get('/author/create', [\App\Http\Controllers\AuthorController::class, 'create']);
    Route::get('/author/update/id/{id}', [\App\Http\Controllers\AuthorController::class, 'update']);

    Route::post('/author/add', [\App\Http\Controllers\AuthorController::class, 'add'])->name('author_add');
    Route::patch('/author/edit', [\App\Http\Controllers\AuthorController::class, 'edit'])->name('author_edit');
    Route::delete('/author/delete/id/{id}', [\App\Http\Controllers\AuthorController::class, 'delete'])->name('author_delete');

    Route::get('/book', [\App\Http\Controllers\BookController::class, 'index']);
    Route::get('/book/create', [\App\Http\Controllers\BookController::class, 'create']);
    Route::get('/book/update/id/{id}', [\App\Http\Controllers\BookController::class, 'update']);

    Route::post('/book/add', [\App\Http\Controllers\BookController::class, 'add'])->name('book_add');
    Route::patch('/book/edit', [\App\Http\Controllers\BookController::class, 'edit'])->name('book_edit');
    Route::delete('/book/delete/id/{id}', [\App\Http\Controllers\BookController::class, 'delete'])->name('book_delete');
});
