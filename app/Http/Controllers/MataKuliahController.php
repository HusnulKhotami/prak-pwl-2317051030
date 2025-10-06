<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mata_Kuliah;

class MataKuliahController extends Controller
{
    //
    public function index(){
        $data =[
            'title' => 'List Mata Kuliah',
            'mks'=> mata_kuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create(){
        return view('create_mk',['title'=> 'Create Mata Kuliah']);
    }

    public function store(Request $request){
        Mata_Kuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'=> $request->input('sks'),
        ]);
        return redirect()->to('/matakuliah');
    }
}
