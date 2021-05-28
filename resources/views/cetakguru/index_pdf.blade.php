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
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>JK</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($guru as $g)
                <tr>
                    <th>{{ $i++ }}</th>
                    <th>{{ $g->nip }}</th>
                    <th>{{ $g->nama_guru }}</th>
                    <th>{{ $g->tanggal_lahir }}</th>
                    <th>{{ $g->jenis_kelamin }}</th>
                </tr>
                @endforeach
            </tbody>        
        </table>

    </body>

</html>