@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1>My Projects</h1>

    @foreach ($projects as $project)
    <ul>
        <li>{{ $project->title }}</li>
        <li>{{ $project->description }}</li>
    </ul>
    @endforeach

@endsection
