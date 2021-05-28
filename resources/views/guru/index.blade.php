@extends('layout.main')

@section('title', 'Guru')

@section('container')
<div id="guru">
<h2>Guru</h2>

<a href="{{url ('guru/createguru') }}" class="btn btn-primary">Tambah Guru</a>
<a href="{{url ('guru_cetak') }}" class="btn btn-primary">Cetak PDF</a>
@if (!empty($guru_list))
<table class="table">
<thead>
<tr>
<th>NIP</th>
<th>Nama</th>
<th>Tgl Lahir</th>
<th>Jenis Kelamin</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($guru_list as $guru)
<tr>
<td>{{ $guru->nip }}</td>
<td>{{ $guru->nama_guru }}</td>
<td>{{ $guru->tanggal_lahir }}</td>
<td>{{ $guru->jenis_kelamin }}</td>
<td><a class="btn btn-info" href="{{ url('guru/' . $guru->id) }}">Detail</a>
<a class="btn btn-success" href="{{ url('guru/' . $guru->id . '/editguru') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('guru/' . $guru->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p>Tidak ada data guru.</p>
@endif
</div>

<div class="table-bottom">
<div class="pull-left">
<strong> Jumlah Guru : {{ $jumlah_guru }}</strong>
</div>
<div class="pull-right">
{{ $guru_list->links() }}
</div>
</div>

<div id="footer">

<p> &copy; 2019 project1</p>
</div>
@endsection