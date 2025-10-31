<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,
'index']);

Route::get('/todo/tambah',[TodoListController::class, 'tambah']);
Route::post('/todo/simpan',[TodoListController::class, 'simpan']);

Route::delete('/hapus/{id}',[TodoListController::class, 'hapus']);
Route::get('/form_edit/{id}',[TodoListController::class, 'edit']);
Route::put('/update/{id}',[TodoListController::class, 'update']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'index'])->name('user.create');
Route::post('/users', [UserController::class, 'simpan'])->name('user.store');
Route::get('/users/tambah', [UserController::class, 'tambah']);
Route::get('/form_edit_user/{id}',[UserController::class, 'edit']);
Route::put('/update_user/{id}',[UserController::class, 'update']);
