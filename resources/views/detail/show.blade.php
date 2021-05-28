@extends('layout.main')

@section('title', 'detail')

@section('container')

<div id="siswa">
    <h2>Detail Siswa</h2>

    <table class="table table-striped">
        <tr>
        <th>NISN</th>
        <td>{{ $siswa->nisn }}</td>
        </tr>
        <tr>
        <th>Nama</th>
        <td>{{ $siswa->nama_siswa }}</td>
        </tr>
        <tr>
        <th>Kelas</th>
        <td>{{ ! empty($siswa->kelas->nama_kelas) ?
        $siswa->kelas->nama_kelas : '-' }}</td>
        </tr>
        <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $siswa->tanggal_lahir }}</td>
        </tr>
        <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $siswa->jenis_kelamin }}</td>
        </tr>
        <tr>
        <th>Gambar</th>
        <td><img src="{{$siswa->getAvatar()}}" alt="Avatar" height="120px" width="200px"></td>
        </tr>
    </table>
</div>

@endsection