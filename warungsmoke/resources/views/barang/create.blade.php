<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="p-6 bg-white border-b border-gray-200">
                        <CENTER><h2>INPUT DATA PRODUK</h2></CENTER>
                        @if (session()->has('info'))
                            <div class="alert alert-success">
                                {{ session()-> get ('info')}}
                            </div>
                        @endif
                        <form action="{{url('barang/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Produk</label>
                                <input type="text" name="nama" id="nama" class="form-control" 
                                value="{{ old('nama')}}">
                                @error('nama')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Stok Barang</label>
                                <input type="text" name="stok" id="stok" class="form-control" 
                                value="{{ old('nama')}}">
                                @error('stok')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga Barang</label>
                                <input type="text" name="harga" id="harga" class="form-control" 
                                value="{{ old('nama')}}">
                                @error('harga')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto Produk</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                                @error('foto')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="button" class="btn btn-primary mt-2" onclick="history.go(-1)">KEMBALI</button>
                            <button type="submit" class="btn btn-primary mt-2">SIMPAN</button>
                        </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>