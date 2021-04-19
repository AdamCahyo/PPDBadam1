<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB SMK Merdeka Belajar Print</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adamcahyonugroho.index') }}"> Kembali</a>
            </div>
<body onload="window.print()">
    <div class="container">
        <h4 class="mt-5">Selamat, Anda sudah terdaftar di SMK Merdeka Belajar</h4>
        <h5>Berikut data anda :</h5>
        <table class="mr-auto mt-4 font-weight-bold">
            <tr>
                <td>No Reg : {{ $siswa->id }}</td>
            </tr>
            <tr>
                <td>Nama : {{ $siswa->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin : {{ $siswa->jk }}</td>
            </tr>
            <tr>
                <td>Alamat : {{ $siswa->alamat }}</td>
            </tr>
            <tr>
                <td>Asal Sekolah : {{ $siswa->asal_sekolah }}</td>
            </tr>
            <tr>
                <td>Minat Jurusan : {{ $siswa->minat_jurusan }}</td>
            </tr>
        </table>
    </div>
</body>
</html>