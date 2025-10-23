<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
class TodoListController extends Controller
{
    
    public function index()
    {
        $todo_list = TodoList::all();
        return view('todo.index',[
            'todo_lists' => $todo_list
        ]);
    }
    public function simpan(Request $request)
    {
       $request->validate([
        'nama' => 'required',
        'tugas' => 'required',
        'deadline' => 'required|date',      
       ]);

       TodoList::create([
          'nama' =>$request->nama,
          'tugas' =>$request->tugas,
          'deadline' =>$request->deadline,
          'status' =>$request->status,
       ]);
       return redirect('/todo');
    }
    public function tambah()
    {
       return view('todo.form');
    }
}
