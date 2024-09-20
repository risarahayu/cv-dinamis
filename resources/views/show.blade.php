@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($data as $data)
                <div class="col-4">

                </div>
                <div class="col-8">
                    <div class="row">
                        <p>{{$data->nama}}</p>
                    </div>
                    <div class="row">
                        <p>{{$data->keterangan}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <h3>Education</h3>
            <span class="m-3 p-3 rounded border">
                @foreach($education as $education)
                    {{$education->sekolah}}
                    {{$education->jurusan}}
                    {{$education->tahun}}
                    {{$education->ipk}}
                @endforeach
            </span>
        </div>
    </div>
@endsection