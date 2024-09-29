<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
    public function show(Biodata $biodatum)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biodata $biodatum)
    {
        $biodata = $biodatum;
        return view ('Biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biodata $biodatum)
    {
        // Validasi input
        $validasi = $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Gambar bersifat opsional saat update
        ]);

        // Temukan biodata berdasarkan ID
        $biodata = $biodatum;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($biodata->image) {
                File::delete(public_path('images/' . $biodata->image));
            }

            // Ambil file
            $image = $request->file('image');
            // Tentukan nama file unik
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Simpan gambar ke folder public/images
            $image->move(public_path('images'), $imageName);
            // Masukkan nama file ke dalam validasi
            $validasi['image'] = $imageName;
        } else {
            // Jika tidak ada gambar yang diupload, tetap gunakan nama file yang lama
            $validasi['image'] = $biodata->image;
        }

        // Perbarui data ke database
        $biodata->update($validasi);

        return redirect()->route('cv.show')->with('success', 'Biodata berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata $biodatum)
    {
        // Temukan biodata berdasarkan ID
        $biodata = $biodatum;

        // Hapus file gambar jika ada
        if ($biodata->image) {
            File::delete(public_path('images/' . $biodata->image));
        }

        // Hapus biodata dari database
        $biodata->delete();

        return redirect()->route('cv.show')->with('success', 'Biodata berhasil dihapus!');
    }
}
