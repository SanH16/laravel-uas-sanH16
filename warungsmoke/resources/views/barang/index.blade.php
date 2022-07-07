<!DOCTYPE html>
<html lang="en">
<head>
  <CENTER><title>TABEL PRODUK</title></CENTER>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <CENTER><h2>TABEL PRODUK</h2></CENTER>
  <CENTER><p>All About Taste.</p></CENTER>            
  <table class="table">
    <thead>
                        <tr>
                            <CENTER><th>Nama Barang</th></CENTER>
                            <CENTER><th>Contoh Barang</th></CENTER>
                            <CENTER><th>Stok Barang</th></CENTER>
                            <CENTER><th>Harga Barang</th></CENTER>
                            <CENTER><th>Tools</th></CENTER>
                            <button type="button" class="btn btn-primary mt-2" onclick="history.back(-1)">KEMBALI</button>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $item)
                            <tr>
                                <CENTER><td>{{ $item->nama}}</td></CENTER>
                                <td>
                                    <img src="{{ asset('storage/' .$item->foto) }}" alt="logo" width="100">
                                </td>
                                <CENTER><td>{{ $item->stok}}</td></CENTER>
                                <CENTER><td>Rp.{{ $item->harga}}</td></CENTER>
                                <td>
                                    <form action="{{ route('barang.destroy', ['barang' => $item->id]) }}"
                                    method="POST">
                                        <a href="{{ url('/barang/'.$item->id) }}" class="btn btn-warning">Detail</a>

                                        <a href="{{ url('/barang/'.$item->id.'/edit') }}" class="btn btn-info">Ubah</a>
                                        
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>

    </div>
</body>
</html>