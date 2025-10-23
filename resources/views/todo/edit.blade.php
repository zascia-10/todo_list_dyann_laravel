<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Todo List</title>
</head>
<body>
    <h1>Form Edit Tugas</h1>
        <form method="post" action="/update/{{$todo->id}}">
            @csrf
            @method('PUT')
            <label>Nama: <input type="text" name="nama" value="{{$todo->nama}}"></label><br><br>
            <label>Tugas: <input type="text" name="tugas" value="{{$todo->tugas}}"></label><br><br>
            <label>Deadline: <input type="date" name="deadline" value="{{$todo->deadline}}"></label><br><br>
            <label>Status: <input type="text" name="status" value="{{$todo->status}}"></label><br><br>
            
            <button type="submit">Simpan</button>
    </form>
</body>
</html>