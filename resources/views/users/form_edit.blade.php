@extends('layout.app')
@section('content')
    <h1>Form Edit Tugas</h1>
    <form method="post" action="/update/{{$users->id}}">
            @csrf
            @method('PUT')
            <label>Nama: <input type="text" name="nama" value="{{$users->nama}}"></label><br><br>
            <label>Tugas: <input type="text" name="tugas" value="{{$users->tugas}}"></label><br><br>
            <label>Deadline: <input type="date" name="deadline" value="{{$users->deadline}}"></label><br><br>
            <label>Status: <input type="text" name="status" value="{{$users->status}}"></label><br><br>
            
            <button type="submit">Simpan</button>
    </form>
@endsection