<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Membuat Laporan PDF dengan DOMPDF Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
        <style type="text/css">
            table tr td
            table tr th{
                font-size: 9pt;
            }
        </style>

        <center>
            <h4> Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
        </center>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tgl Lahir</th>
                    <th>JK</th>
                    <th>Avatar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($siswa as $s)
                <tr>
                    <th>{{ $i++ }}</th>
                    <th>{{ $s->nama_siswa }}</th>
                    <th>{{ $s->kelas->nama_kelas }}</th>
                    <th>{{ $s->tanggal_lahir }}</th>
                    <th>{{ $s->jenis_kelamin }}</th>
                    <th><img src="{{$s->getAvatar()}}" alt="Avatar" height="120px" width="200px"></th>
                </tr>
                @endforeach
            </tbody>        
        </table>

    </body>

</html>