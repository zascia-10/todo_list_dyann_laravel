<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('todo', function () {
    return view('TodoListController');
});
Route::get('/todo', [TodoListController::class, 'index']);