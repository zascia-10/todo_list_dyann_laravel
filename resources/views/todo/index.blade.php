<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>Daftar Tugas</h2>
     <a href="/todo/tambah">Tambah</a>
    <!--Tambah tombol/link-->
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No </th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Aksi</th>
            
        </tr>
        @foreach ($todo_lists as $item )
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->tugas}}</td>
            <td>{{ $item->deadline}}</td>
            <td>{{ $item->status}}</td>
            <td>
            <a href="/form_edit/{{ $item->id }}">Edit</a>
            <form action="/hapus/{{ $item->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>