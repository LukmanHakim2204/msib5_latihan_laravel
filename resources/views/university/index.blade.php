@extends('component.navbar')
@section('content')
    <div class="container3">
        <div class="img-umc">
            <img src="{{ asset('image/logo-univ.png') }}" alt="">
        </div>
        <div class="content2">
            <h1 class="judul">Informasi Universitas Muhammadiyah Cirebon</h1>
            <p>{{ $deskripsi }}</p>
            <p>{{ $deskripsi2 }}</p>
            <p>{{ $deskripsi3 }}</p>
        </div>
    </div>
@endsection
