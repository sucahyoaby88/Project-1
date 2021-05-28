@extends('layout.main')

@section('title', 'Siswa')

@section('container')
<div id="siswa">
<h2>Siswa</h2>

<a href="{{url ('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
<a href="{{url ('siswa_cetak') }}" class="btn btn-primary">Cetak PDF</a>
@if (!empty($siswa_list))
<table class="table">
<thead>
<tr>
<th>NISN</th>
<th>Nama</th>
<th>Kelas</th>
<th>Tgl Lahir</th>
<th>Jenis Kelamin</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($siswa_list as $siswa)
<tr>
<td>{{ $siswa->nisn }}</td>
<td>{{ $siswa->nama_siswa }}</td>
<td>{{ ! empty($siswa->kelas->nama_kelas) ?
        $siswa->kelas->nama_kelas : '-' }}</td>
<td>{{ $siswa->tanggal_lahir }}</td>
<td>{{ $siswa->jenis_kelamin }}</td>
<td><a class="btn btn-info" href="{{ url('siswa/' . $siswa->id) }}">Detail</a>
<a class="btn btn-success" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a>
<a class="btn btn-danger" href="{{ url('siswa/' . $siswa->id . '/delete') }}">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@else
<p>Tidak ada data siswa.</p>
@endif
</div>

<div class="table-bottom">
<div class="pull-left">
<strong> Jumlah Siswa : {{ $jumlah_siswa }}</strong>
</div>
<div class="pull-right">
{{ $siswa_list->links() }}
</div>
</div>

<div id="footer">

<p> &copy; 2019 project1</p>
</div>
@endsection