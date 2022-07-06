<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view("barang.index")->with('barangs', $barangs);
    }

    public function show(Barang $barang)
    {
        return view("barang.show", ['barang' => $barang]);
    }


    public function create(){
        return view("barang.create");
    }
    public function store(Request $request)
    {
        //dump($request);
        // echo $request->nama;

        $validateData = $request->validate(
            ['nama' => 'required|min:5|max:20'
            ,'foto' => 'required|file|image|max:5000'
            ,'stok' => 'required|min:1|max:10'
            ,'harga' => 'required|min:1|max:5000'
        ]);

        //ambil ekstensi file
        $ext = $request->foto->getClientOriginalExtension();
        //rename nama file
        $nama_file = "foto" . time() . "." . $ext;
        $path = $request->foto->storeAs('public', $nama_file);
        // dump($validateData);
        // echo $validateData['nama'];

        $barang = new Barang();
        $barang->nama = $validateData['nama'];
        $barang->stok = $request['stok'];
        $barang->harga = $request['harga'];
        $barang->foto = $nama_file;
        $barang->save();

        $request->session()->flash("info","Data barang berhasil disimpan!");
        return redirect()->route("barang.create");

    }

    public function edit(Barang $barang)
    {
        return view("barang.edit", ['barang' => $barang]);
    }

    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate(
            ['nama' => 'required|min:5|max:20'
            ,'foto' => 'max:5000'
            ,'stok' => 'required|min:1|max:10'
            ,'harga' => 'required|min:1|max:5000'
        ]);

        Barang::where('id', $barang->id)->update($validateData);
        $request->session()->flash("info","Data barang berhasil diubah!");
        return redirect()->route("barang.index");

    }
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with("info", "Data barang berhasil dihapus");
    }
}