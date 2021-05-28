@extends('layout.main')

@section('title', 'Tambah Siswa')

@section('container')
<form action="{{ url('/siswa') }}" method="post" enctype="multipart/form-data">       
        @csrf 
        <div class="form-group"> 
            <label for="nisn" class="controllabel">NISN</label> 
            <input name="nisn" type="text" class="formcontrol"> 
        </div> 
        <div class="form-group"> 
            <label for="nama_siswa" class="controllabel">Nama</label> 
            <input name="nama_siswa" type="text" class="formcontrol">       
        </div> 
        <div class="form-group">
        <label for="id_kelas">Kelas</label>
        @if(!empty($kelas)) 
        <select name="id_kelas" class="form-control" id="exampleFormControlSelect1">
                @foreach($kelas as $k)
                <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada data Kelas</p>
            @endif
        </div>
        <div class="form-group"> 
            <label for="tanggal_lahir" class="controllabel">Tanggal Lahir</label> 
            <input name="tanggal_lahir" type="date" class="form-control"> 
        </div> 
        <div class="form-group"> 
            <label for="jenis_kelamin" class="controllabel">Jenis Kelamin</label> 
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> 
            <label class="form-check-label" for="jenis_kelamin">Perempuan 
            </label> 
        </div> 
        <div class="form-check"> 
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> 
            <label class="form-check-label" for="jenis_kelamin">Laki-Laki 
            </label> 
        </div> 
        </div>

        <div class="form-group"> 
	            <label for="avatar" class="control-label">Gambar</label> 
	            <input name="avatar" type="file" class="form-control">       
            </div> 	

            <button type="submit" class="btn btn-primary">Submit</button> 
    </form> 
    </div>

@endsection