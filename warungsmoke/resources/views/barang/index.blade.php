<x-app-layout>
    <x-slot name="header">
        <CENTER><h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SMOKE TEAM ALERT') }}
        </h2></CENTER>
    </x-slot>
    <div class="row pt-4">
        <div class="col">
            <CENTER><h2>Tabel Barang</h2></CENTER>

            @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info')}}
                    </div>
            @endif

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Contoh Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $item)
                            <tr>
                                <td><CENTER>{{ $item->nama}}</CENTER></td>
                                <td>
                                    <img src="{{ asset('storage/' .$item->foto) }}" alt="logo" width="100">
                                </td>
                                <td><CENTER>{{ $item->stok}}</CENTER></td>
                                <td><CENTER>Rp.{{ $item->harga}}</CENTER></td>
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
</x-app-layout>