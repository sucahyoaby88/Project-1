@extends('layout.main')

@section('title', 'Tambah Wali Kelas')

@section('container')
<form action="{{ url('/walikelas') }}" method="post">       
        @csrf 
        <div class="form-group">
        <label for="id_guru">Nama</label>
        @if(!empty($guru)) 
        <select name="id_guru" class="form-control" id="exampleFormControlSelect1">
                @foreach($guru as $g)
                <option value="{{$g->id}}">{{$g->nama_guru}}</option>
                @endforeach
			</select>
            @else
            <p>Tidak ada data Guru</p>
            @endif
        </div>
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
            <button type="submit" class="btn btn-primary">Submit</button> 
    </form> 
    </div>

@endsection