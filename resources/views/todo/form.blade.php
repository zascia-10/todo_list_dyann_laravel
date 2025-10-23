<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Todo List</title>
</head>
<body>
    <h1>Form Tambah Tugas</h1>
        <form method="post" action="/todo/simpan">
            @csrf
            <label>Nama: <input type="text" name="nama"></label><br><br>
            <label>Tugas: <input type="text" name="tugas"></label><br><br>
            <label>Deadline: <input type="date" name="deadline"></label><br><br>
            <label>Status: <input type="text" name="status"></label><br><br>
            
            <button type="submit">Simpan</button>
    </form>
</body>
</html>