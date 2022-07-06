<x-app-layout>
    <x-slot name="header">
        <CENTER><h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SMOKE TEAM ALERT') }}
        </h2></CENTER>
    </x-slot>
    <div class="row pt-4">
        <div class="col">
            <CENTER><h2>SMOKE AREA</h2></CENTER>

            @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info')}}
                    </div>
            @endif
                <div class="d-md-flex justify-content-md-end">
                    <a href="{{ route('prodi.create')}}" class="btn btn-primary mt-2">INPUT DATA</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Contoh Barang</th>
                            <th>Stok Barang</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodis as $item)
                            <tr>
                                <td><CENTER>{{ $item->nama}}</CENTER></td>
                                <td>
                                    <img src="{{ asset('storage/' .$item->foto) }}" alt="logo" width="100">
                                </td>
                                <td><CENTER>{{ $item->stok}}</CENTER></td>
                                <td>
                                    <form action="{{ route('prodi.destroy', ['prodi' => $item->id]) }}"
                                    method="POST">
                                        <a href="{{ url('/prodi/'.$item->id) }}" class="btn btn-warning">Detail</a>

                                        <a href="{{ url('/prodi/'.$item->id.'/edit') }}" class="btn btn-info">Ubah</a>
                                        
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