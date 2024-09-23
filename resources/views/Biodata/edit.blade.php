@extends('layouts.app')

@section('content')
<!-- ini adalah formulir biodata -->
    <div class="container">
        <h1>Formulir Edit Biodata</h1>
        <form method="POST" action="{{ route('biodata.update',  $biodata->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="Tambahkan nama" name="nama" value="{{ $biodata->nama }}" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="keterangan" class="form-control" id="" aria-describedby="" placeholder="Tambahkan keterangan" name="keterangan" value="{{ $biodata->keterangan }}" required>{{ $biodata->keterangan }}</textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="form-group mb-3">
                <label for="image" class="form-label">Upload Foto</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection