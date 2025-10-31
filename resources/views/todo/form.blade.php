@extends('layout.app')

@section('content')
 
    <h1>Form Tambah Tugas</h1>
        <form method="post" action="/todo/simpan">
            @csrf
            <label>Nama: <input type="text" name="nama"></label><br><br>
            <label>Tugas: <input type="text" name="tugas"></label><br><br>
            <label>Deadline: <input type="date" name="deadline"></label><br><br>
            <label>Status: <input type="text" name="status"></label><br><br>
            
            <button type="submit">Simpan</button>
    </form>
@endsection