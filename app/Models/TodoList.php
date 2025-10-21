<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model

{
    //Tambahkan di sini
    protected $filelable =[
        'nama',
        'tugas',
        'deadline',
        'status',
    ];
}
