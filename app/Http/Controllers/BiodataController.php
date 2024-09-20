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
         return view('Biodata.show', compact('data'));
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
        ]);

        // Simpan data ke database
        Biodata::create($Validasi);
        return view('Biodata.show');

        
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
    public function edit(Biodata $biodata)
    {
        //
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
