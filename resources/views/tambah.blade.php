@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h1>Tambah Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf

    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="jurusan" placeholder="Jurusan"><br>

    <button type="submit">Simpan</button>
</form>