<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }

    public function tambah()
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create([
            'nim' => '123456789',
            'nama' => 'Thomson Manulang',
            'jurusan' => 'Sistem Informasi'
        ]);

        return "data berhasil ditambahkan";
    }

    public function form()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/mahasiswa');
    }
}
