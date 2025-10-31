<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Tambahkan properti fillable sesuai kolom table

    protected $fillable = [
        'id',
        'nama',
        'email',
        'password',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'foto_profil',
        'website',
        'biografi',
    ];
}