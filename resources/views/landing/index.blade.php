@extends('component.navbar')
@section('content')
    <div class="container mt-5">
        <div class="img-man">
            <img src="{{ asset('image/lukman.jpg') }}" alt="">
        </div>
        <div class="content">
            <h1>Tentang Saya</h1>
            <p>{{ $deskripsi }}</p>
        </div>
    </div>
@endsection
