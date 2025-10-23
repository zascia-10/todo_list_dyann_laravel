<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('todo', function () {
    return view('TodoListController');
});
Route::get('/todo', [TodoListController::class, 'index']);
Route::post('/todo/simpan', [TodoListController::class, 'simpan']);
Route::get('/todo/tambah', [TodoListController::class, 'tambah']);