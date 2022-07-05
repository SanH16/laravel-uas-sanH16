@extends('layout.master')
@section("title", "Halaman Detail prodi")

@section("content")
    <div class="row pt-4">
        <div class="col">
            <h2>Profil Prodi {{ $prodi->nama}}</h2>
            

        <table class="table table-striped table-hover">
            <tr>
                <td>Kode Prodi</td>
                <td>{{ $prodi->id }}</td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
        </table>

    </div>

@endsection