@extends('layout.main')

@section('title', 'Edit')

@section('container')
	<div id="siswa">
        <h2>Edit Siswa</h2> 
        <form action="{{ url('siswa/' . $siswa->id . '/update') }}" method="post" enctype="multipart/form-data"> 
        @csrf 
	        <div class="form-group"> 
	            <label for="nisn" class="control-label">NISN</label> 
	            <input name="nisn" type="text" class="form-control" value="{{$siswa->nisn}}">       
            </div> 

	        <div class="form-group"> 
	            <label for="nama_siswa" class="control-label">Nama</label> 
	            <input name="nama_siswa" type="text" class="form-control" value="{{$siswa->nama_siswa}}"> 
	        </div> 

			<div class="form-group">
        <label for="id_kelas">Kelas</label>
        @if(!empty($kelas)) 
        <select name="id_kelas" class="form-control" id="exampleFormControlSelect">
                @foreach($kelas as $k)
                <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada data Kelas</p>
            @endif
        </div>

            <div class="form-group"> 
	            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label> 
	            <input name="tanggal_lahir" type="date" class="form-control" value="{{$siswa->tanggal_lahir}}"> 
            </div> 

	        <div class="form-group"> 
	            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label> 
	    @if ($siswa->jenis_kelamin=="P") 
	            <div class="form-check"> 
	                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked> 
	                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                </div> 
	            <div class="form-check"> 
	                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> 
	                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label> 
	            </div> 
	    @elseif ($siswa->jenis_kelamin=="L") 
	            <div class="form-check"> 
	                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> 
	                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                </div> 
	            <div class="form-check"> 
	                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked> 
	                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label> 
	            </div> 
	    @endif 
            </div>
			<div class="form-group"> 
	            <label for="avatar" class="control-label">Gambar</label> 
	            <input name="avatar" type="file" class="form-control">       
            </div> 	
	
        <button type="submit" class="btn btn-primary">Submit</button> 
	</form> 
	</div> 
@endsection