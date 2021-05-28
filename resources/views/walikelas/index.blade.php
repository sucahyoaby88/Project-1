@extends('layout.main')

@section('title', 'Wali Kelas')

@section('container')
<div id="walikelas">
<h2>Wali Kelas</h2>

<a href="{{url ('walikelas/createwalikelas') }}" class="btn btn-primary">Tambah Wali Kelas</a>
@if (!empty($walikelas_list))
<table class="table">
<thead>
<tr>
<th>Nama</th>
<th>Kelas</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($walikelas_list as $walikelas)
<tr>
<td>{{  ! empty($walikelas->guru->nama_guru) ?
        $walikelas->guru->nama_guru : '-'  }}</td>
<td>{{  ! empty($walikelas->kelas->nama_kelas) ?
        $walikelas->kelas->nama_kelas : '-'  }}</td>
<td><a class="btn btn-info" href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a>
<a class="btn btn-success" href="{{ url('walikelas/' . $walikelas->id . '/editwalikelas') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('walikelas/' . $walikelas->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p>Tidak ada data Wali Kelas.</p>
@endif
</div>

<div class="table-bottom">
<div class="pull-left">
<strong> Jumlah Wali Kelas : {{ $jumlah_walikelas }}</strong>
</div>
<div class="pull-right">
{{ $walikelas_list->links() }}
</div>
</div>

<div id="footer">

<p> &copy; 2019 project1</p>
</div>
@endsection