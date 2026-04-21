<h1>Data Mahasiswa</h1>
<a href="/mahasiswa/tambah">Tambah Data</a>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
            <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a>
            <a href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>