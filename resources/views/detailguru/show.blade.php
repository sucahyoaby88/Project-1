@extends('layout.main')

@section('title', 'detail')

@section('container')

<div id="guru">
    <h2>Detail Guru</h2>

    <table class="table table-striped">
        <tr>
        <th>NIP</th>
        <td>{{ $guru->nip }}</td>
        </tr>
        <tr>
        <th>Nama</th>
        <td>{{ $guru->nama_guru }}</td>
        </tr>
        <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $guru->tanggal_lahir }}</td>
        </tr>
        <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $guru->jenis_kelamin }}</td>
        </tr>
    </table>
</div>

@endsection