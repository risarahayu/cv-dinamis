@extends('layouts.app')

@section('content')
        @foreach($data as $data)
            <p>{{$data->nama}}</p>
        @endforeach
@endsection