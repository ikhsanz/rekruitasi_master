<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_mahasiswa = \App\Mahasiswa::where('id', 'LIKE', '%' . $request->cari . '%')->orWhere('pilihan_keprofesian','LIKE','%'.$request->cari.'%')
            ->orWhere('nama_mahasiswa', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_mahasiswa = \App\Mahasiswa::all();
        }
        return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request, $id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        if (!is_null($mahasiswa)) {
            $mahasiswa->delete();
        }
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil dihapus');
    }
}
