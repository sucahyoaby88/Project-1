@extends('layout.main')

@section('title', 'Tambah Guru')

@section('container')
<form action="{{ url('/guru') }}" method="post">       
        @csrf 
        <div class="form-group"> 
            <label for="nip" class="controllabel">NIP</label> 
            <input name="nip" type="text" class="formcontrol"> 
        </div> 
        <div class="form-group">  
            <label for="nama_guru" class="controllabel">Nama</label> 
            <input name="nama_guru" type="text" class="formcontrol">       
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
            <button type="submit" class="btn btn-primary">Submit</button> 
    </form> 
    </div>

@endsection