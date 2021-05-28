<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use PDF;

class siswacontroller extends Controller
{
    public function siswa() {
        $halaman = 'siswa';
        $siswa_list = Siswa::orderBy('id', 'asc')->paginate(5);
        $jumlah_siswa = Siswa::count(); 
        return view('siswa.index', compact('halaman', 'siswa_list', 'jumlah_siswa'));
        }
    

    public function create(){
        $halaman = 'siswa';
        $kelas = Kelas::all();
        return view('create.index', compact('halaman', 'kelas'));
        }

    public function store(Request $request){
    $avatar = $request->file('avatar');
	$nama_file = time()."_".$avatar->getClientOriginalName();
	$tujuan_upload = 'images';
	$avatar->move($tujuan_upload,$nama_file);
    siswa::create([
        'nisn' => $request->nisn,
        'nama_siswa' => $request->nama_siswa,
        'id_kelas' => $request->id_kelas,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'avatar' => $nama_file,
    ]);
    return redirect('siswa');
    }

    public function show($id){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('detail.show', compact('halaman', 'siswa'));
    }

    public function edit($id){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit.index', compact('halaman', 'siswa', 'kelas'));
    }

    public function update($id, Request $request){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        $siswa->save();
        return redirect('siswa');
    }

    public function delete($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function cetak_pdf(){
        $siswa = Siswa::all();
        $pdf = PDF::loadview('cetak.index_pdf',['siswa'=>$siswa]);
        return $pdf->stream();
    }

}