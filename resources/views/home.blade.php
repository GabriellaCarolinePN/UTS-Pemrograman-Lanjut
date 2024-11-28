@extends('layout/app')

@section('title', 'Home')

@section('content')
    <h1>Welcome!!!</h1>
    <h3>Selamat datang di Website Profil saya. Silahkan lihat-lihat dan kontak saya apabila Anda berkenan untuk bekerja sama dengan saya 😁</h3>
    <div class="home-container">
        <img src="{{ asset('profile/' . $profile->photo) }}" alt="Profile Picture">
        <h1>{{ $profile->name }}</h1>
        <p>{{ $profile->description }}</p>
        <p>Contact: {{ $profile->contact }}</p>
    </div>
@endsection
