<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // menampilkan data biodata
         $data = Biodata::all();
        //  dd($data);
        return redirect()->route('cv.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan formulir biodata
        return view('Biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // menyimpan data dari formulir biodata
        // dd($request);
        // Validasi input
        $Validasi = $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Ambil file
            $image = $request->file('image');
            // Tentukan nama file unik
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Simpan gambar ke folder public/images
            $image->move(public_path('images'), $imageName);
            // Masukkan nama file ke dalam validasi
            $Validasi['image'] = $imageName;
        }
        // Simpan data ke database
        Biodata::create($Validasi);

        return redirect()->route('cv.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biodata $biodata)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view ('Biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
