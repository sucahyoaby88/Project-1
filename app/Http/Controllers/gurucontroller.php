<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use PDF;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;

class gurucontroller extends Controller
{
    public function guru() {
        $halaman = 'guru';
        $guru_list = Guru::orderBy('id', 'asc')->paginate(5);
        $jumlah_guru = Guru::count(); 
        return view('guru.index', compact('halaman', 'guru_list', 'jumlah_guru'));
        }

    public function create(){
        $halaman = 'guru';
        return view('createguru.index', compact('halaman'));
        }

    public function store(Request $request){
        Guru::create($request->all());
        return redirect('guru');
        }

    public function show($id){
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('detailguru.show', compact('halaman', 'guru'));
        }
    
    public function edit($id){
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('editguru.index', compact('halaman', 'guru'));
        }
    
    public function update($id, Request $request){
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        $guru->update($request->all());
        return redirect('guru');
        }
    
    public function delete($id){
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
        }
    
    public function cetak_pdf(){
            $guru = Guru::all();
            $pdf = PDF::loadview('cetakguru.index_pdf',['guru'=>$guru]);
            return $pdf->stream();
        }
}
