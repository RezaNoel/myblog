@extends('layouts.app')
@section('title')
    Posts
@endsection

@section('content')
    <div class="project-card-header">
        <div class="header">
            <h1 >Blog Posts</h1>
        @if(Auth::check())
            <a href="{{ route('admin.index') }}" class="neumorphic-btn sprints">Admin Panel</a>
        @else
            <div>
                <a href="{{ route('login') }}" class="neumorphic-btn sprints">Login</a>
                <a href="{{ route('register') }}" class="neumorphic-btn sprints">Register</a>
            </div>
        @endif
    </div>
    </div>
    <br>
    <section class="project-cards">
    @foreach ($posts as $post)

        <div class="project-card">
            <div class="project-content">
                <div class="project-card-header">
                    <h2 class="card-title mb-4">{{ $post->title }}</h2>
                </div>
                <div class="project-card-details">
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('post.show', $post->id) }}" class="neumorphic-btn details">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
    </section>
@endsection

