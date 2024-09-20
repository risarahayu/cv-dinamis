<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata; // Tambahkan ini
use App\Models\Education; // Tambahkan ini

class CVController extends Controller
{
    public function show(){
        $data = Biodata::all();
        $education =  Education::all();
        return view('show', compact('data', 'education'));
    }
}
