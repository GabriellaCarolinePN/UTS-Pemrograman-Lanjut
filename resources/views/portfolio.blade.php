@extends('layout/app')

@section('title', 'Portfolio')

@section('content')
    <h1>Portofolio</h1>
    @foreach($projects as $project)
        <div class="project">
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
            @if($project->image)
                <img src="{{ asset('projects/' . $project->image) }}" alt="{{ $project->title }}">
            @endif
            <br>
            @if($project->link)
                <a href="{{ $project->link }}" target="_blank">Lihat Proyek</a>
            @endif
        </div>
    @endforeach
@endsection
