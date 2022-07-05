<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view("prodi.index")->with('prodis', $prodis);
    }

    public function show(Prodi $prodi)
    {
        return view("prodi.show", ['prodi' => $prodi]);
    }


    public function create(){
        return view("prodi.create");
    }
    public function store(Request $request)
    {
        //dump($request);
        // echo $request->nama;

        $validateData = $request->validate(
            ['nama' => 'required|min:5|max:20'
            ,'foto' => 'required|file|image|max:5000'
        ]);

        //ambil ekstensi file
        $ext = $request->foto->getClientOriginalExtension();
        //rename nama file
        $nama_file = "foto" . time() . "." . $ext;
        $path = $request->foto->storeAs('public', $nama_file);
        // dump($validateData);
        // echo $validateData['nama'];

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->foto = $nama_file;
        $prodi->save();

        $request->session()->flash("info","Data prodi $prodi->nama berhasil disimpan!");
        return redirect()->route("prodi.create");

    }

    public function edit(Prodi $prodi)
    {
        return view("prodi.edit", ['prodi' => $prodi]);
    }

    public function update(Request $request, Prodi $prodi)
    {
        $validateData = $request->validate(
            ['nama' => 'required|min:5|max:20']
        );

        Prodi::where('id', $prodi->id)->update($validateData);
        $request->session()->flash("info","Data prodi $prodi->nama berhasil diubah!");
        return redirect()->route("prodi.index");

    }
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodi.index')->with("info", "Prodi $prodi->nama berhasil dihapus");
    }
}