@extends('layout.main')

@section('title', 'detail')

@section('container')

<div id="walikelas">
    <h2>Detail Wali Kelas</h2>

    <table class="table table-striped">
        <tr>
        <th>Nama</th>
        <td>{{ ! empty($walikelas->guru->nama_guru) ?
        $walikelas->guru->nama_guru : '-' }}</td>
        </tr>
        <tr>
        <th>Kelas</th>
        <td>{{ ! empty($walikelas->kelas->nama_kelas) ?
        $walikelas->kelas->nama_kelas : '-' }}</td>
        </tr>
        </table>
</div>

@endsection