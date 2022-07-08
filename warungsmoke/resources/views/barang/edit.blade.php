@extends('layout.master')
@section('title', 'Halaman Edit Barang')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMOKE TEAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="row pt-4">
    <div class="col">
        <CENTER><h2>UPDATE DATA</h2></CENTER>
        @if (session()->has('info'))
        <div class="alert alert-success">
            {{ session()->get('info') }}
        </div>
        @endif
        <form action="{{ route('barang.update',['barang' => $barang->id]) }}" method="post">
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" id="nama" class="form-control"
                value="{{ old('nama') ?? $barang->nama }}">
                @error('nama')
                    <div class="text-danger"> {{ $message}} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stok">Stok Barang</label>
                <input type="text" name="stok" id="stok" class="form-control"
                value="{{ old('stok') ?? $barang->stok }}">
                @error('stok')
                    <div class="text-danger"> {{ $message}} </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="text" name="harga" id="harga" class="form-control"
                value="{{ old('harga') ?? $barang->harga }}">
                @error('harga')
                    <div class="text-danger"> {{ $message}} </div>
                @enderror
            </div>

            <button type="button" class="btn btn-primary mt-2" onclick="history.back(-1)">KEMBALI</button>
            <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>
        </form>
    </div>
</div>

@endsection

