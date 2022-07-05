@extends('layout.master')
@section("title", "Halaman Detail prodi")

@section("content")
    <div class="row pt-4">
        <div class="col">
            <h2>Produk {{ $prodi->nama}}</h2>
            

        <table class="table table-striped table-hover">
            <tr>
                <td>Kode Produk</td>
                <td>{{ $prodi->id }}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $prodi->nama }}</td>
            </tr>
        </table>

    </div>

@endsection