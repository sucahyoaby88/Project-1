<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Kelas;
use App\Guru;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;

class walikelascontroller extends Controller
{
    public function walikelas() {
        $halaman = 'walikelas';
        $walikelas_list = Walikelas::orderBy('id', 'asc')->paginate(5);
        $jumlah_walikelas = Walikelas::count(); 
        return view('walikelas.index', compact('halaman', 'walikelas_list', 'jumlah_walikelas'));
        }

    public function create(){
        $halaman = 'walikelas';
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('createwalikelas.index', compact('halaman', 'kelas', 'guru'));
        }

    public function store(Request $request){
        Walikelas::create($request->all());
        return redirect('walikelas');
        }

    public function show($id){
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        return view('detailwalikelas.show', compact('halaman', 'walikelas'));
        }
    
    public function edit($id){
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('editwalikelas.index', compact('halaman', 'walikelas', 'kelas', 'guru'));
        }
    
    public function update($id, Request $request){
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->update($request->all());
        return redirect('walikelas');
        }
    
    public function delete($id){
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->delete();
        return redirect('walikelas');
        }
}
