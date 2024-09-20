@extends('layouts.app')

@section('content')
<!-- ini adalah formulir biodata -->
    <div class="container">
        <h1>Formulir Education</h1>
        <form method="POST" action="{{ route('education.store') }}">
            @csrf
            <div class="mb-3">
                <label for="Tahun" class="form-label">Tahun</label>
                <input type="Tahun" class="form-control" id="" aria-describedby="" placeholder="Tambahkan Tahun" name="tahun" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="sekolah" class="form-label">sekolah</label>
                <textarea type="sekolah" class="form-control" id="" aria-describedby="" placeholder="Tambahkan sekolah" name="sekolah" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">jurusan</label>
                <textarea type="jurusan" class="form-control" id="" aria-describedby="" placeholder="Tambahkan jurusan" name="sekolah" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="ipk" class="form-label">ipk</label>
                <textarea type="ipk" class="form-control" id="" aria-describedby="" placeholder="Tambahkan ipk" name="sekolah" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection