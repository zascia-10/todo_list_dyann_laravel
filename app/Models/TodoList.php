<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model

{
    //Tambahkan di sini
    protected $fillable =[
        'nama',
        'tugas',
        'deadline',
        'status',
    ];
}
