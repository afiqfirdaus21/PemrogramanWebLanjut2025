<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <h1>Data User</h1>
    <a href="/user/tambah"> Tambah User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Aksi</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->level_id }}</td>
            <td>
                <a href="/user/ubah/{{ $user->user_id }}">Ubah</a> | 
                <a href="/user/hapus/{{ $user->user_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
