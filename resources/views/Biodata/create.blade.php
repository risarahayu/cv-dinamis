@extends('layouts.app')

@section('content')
<!-- ini adalah formulir biodata -->
    <div class="container">
        <h1>Formulir Biodata</h1>
        <form method="POST" action="{{ route('biodata.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="Tambahkan nama" name="nama" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="keterangan" class="form-control" id="" aria-describedby="" placeholder="Tambahkan keterangan" name="keterangan" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection