<h1>Edit Mahasiswa</h1>

<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
    @csrf

    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>

    <button type="submit">Update</button>
</form>