@extends('layout.master')
@section("title", "Halaman Detail barang")

@section("content")
    <div class="row pt-4">
        <div class="col">
            <h2>Produk {{ $barang->nama}}</h2>
            

        <table class="table table-striped table-hover">
            <tr>
                <td>Kode Produk</td>
                <td>{{ $barang->id }}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $barang->nama }}</td>
            </tr>
            <tr>
                <td>Stok Produk</td>
                <td>{{ $barang->stok }}</td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>{{ $barang->harga }}</td>
            </tr>
        </table>

    </div>
    <button type="button" class="btn btn-primary mt-2" onclick="history.back(-1)">KEMBALI</button>

@endsection