@extends('layout/app')

@section('title', 'Gallery')

@section('content')
    <h1>Galeri</h1>
    <h3>Selamat datang di Galeri saya. Galeri ini berisi berbagai macam dokumentasi diri yang pernah saya ambil</h3>
    <div class="gallery-container">
        @foreach($images as $image)
            <div class="gallery-item">
                <img src="{{ asset('galeri/' . basename($image)) }}" alt="Gallery Image">
            </div>
        @endforeach
    </div>
@endsection
