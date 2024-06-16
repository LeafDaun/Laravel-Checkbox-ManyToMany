<?php

namespace App\Http\Controllers;

use App\Models\Mahasiwa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class MahasiswaController extends Controller
{
    use WithPagination;

    public function show()
    {
        return view('mahasiswa.show', [
            'mahasiswa' => Mahasiwa::latest()->paginate(5)
        ]);
    }

    public function detail($id)
    {
        return view('mahasiswa.detail', [
            'mahasiswa' => Mahasiwa::where('id', $id)->first(),
        ]);
    }

    public function create_kuliah($id)
    {
        return view('mahasiswa.create-kuliah', [
            'mahasiswa' => Mahasiwa::where('id', $id)->first(),
            'kuliah' => Matakuliah::all(),
        ]);
    }

    public function simpan(Request $request)
    {
        
        $matkul = Mahasiwa::find($request->mahasiswa_id);
        $matkul->matakuliah()->sync($request->matkul);
        return redirect()->route('mahasiswa.index')->with('success', 'Pelajaran berhasil di perbaharui..');

    }
}
