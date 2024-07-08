<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswas;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswas::all();
        $data = [
            'title' => 'Data Mahasiwa',
            'mahasiswa' => $mahasiswa
        ];
        return view('mahasiswa.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.tambah');
    }

    public function simpan(Request $request)
    {
        Mahasiswas::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jurusan' => $request->jurusan,
            $request->except(['__token']),
        ]);
        return redirect('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
        // dd('berhasil');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswas::find($id);
        return view('mahasiswa.edit', compact(['mahasiswa']));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswas::find($id);
        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jurusan' => $request->jurusan,
            $request->except(['__token']),
        ]);
        return redirect('mahasiswa')->with('success', 'Data Berhasil di Edit');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswas::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('success', 'Data Berhasil di Hapus');
    }
}
