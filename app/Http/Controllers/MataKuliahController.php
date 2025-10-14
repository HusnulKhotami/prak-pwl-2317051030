<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mata_Kuliah;
use Exception;

class MataKuliahController extends Controller
{
    public function index(){
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Mata_Kuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create(){
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request){
        try {
            Mata_Kuliah::create([
                'nama_mk' => $request->input('nama_mk'),
                'sks' => $request->input('sks'),
            ]);
            return redirect()->to('/matakuliah')->with('success', 'Mata kuliah berhasil ditambahkan!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan mata kuliah!');
        }
    }

    public function edit($id){
        $mk = Mata_Kuliah::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required',
        ]);

        try {
            $mk = Mata_Kuliah::findOrFail($id);
            $mk->update([
                'nama_mk' => $request->input('nama_mk'),
                'sks' => $request->input('sks'),
            ]);
            return redirect()->to('/matakuliah')->with('success', 'Data mata kuliah berhasil diperbarui!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data!');
        }
    }

    public function destroy($id){
        try {
            $mk = Mata_Kuliah::findOrFail($id);
            $mk->delete();
            return redirect()->to('/matakuliah')->with('success', 'Data mata kuliah berhasil dihapus!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data!');
        }
    }
}
