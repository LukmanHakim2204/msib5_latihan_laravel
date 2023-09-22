@extends('component.navbar')
@section('content')
    <div class="container2">
        <h1>Biodata Saya</h1>
        <div class="img-man2">
            <img src="{{ asset('image/lukman.jpg') }}" alt="">
        </div>
        <h2>Lukman Hakim</h2>
        <h3>Mahasiswa</h3>
        <h1>Detail Biodata</h1>
        <div class="list-container">
            <div class="list-group">
                <ul class="list">
                    <li class="list-group-item">Nama : {{ $nama }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $tanggal_lahir }}</li>
                    <li class="list-group-item">Umur : {{ $umur }}</li>
                    <li class="list-group-item">Hobby : {{ $hobby }}</li>
                    <li class="list-group-item">Alamat : {{ $alamat }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
