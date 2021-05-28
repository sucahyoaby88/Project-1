@extends('layout.main')

@section('title', 'Edit')

@section('container')
	<div id="walikelas">
        <h2>Edit Wali Kelas</h2> 
        <form action="{{ url('walikelas/' . $walikelas->id . '/update') }}" method="post"> 
        @csrf
			
        <div class="form-group">
        <label for="id_guru">Nama</label>
        @if(!empty($guru)) 
        <select name="id_guru" class="form-control" id="exampleFormControlSelect">
                @foreach($guru as $g)
                <option value="{{$g->id}}">{{$g->nama_guru}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada data Guru</p>
            @endif
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

        <button type="submit" class="btn btn-primary">Submit</button> 
	</form> 
	</div> 
@endsection