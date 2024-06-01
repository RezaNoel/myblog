@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="project-card-header">
        <h1 class="card-title mb-4">{{ $post->title }}</h1>
    </div>
    <div class="project-card-details">
        <p class="card-text" >{{ $post->content }}</p>
        <a href="{{ route('home') }}" class="neumorphic-btn details">Back to Home</a>
    </div>
@endsection
