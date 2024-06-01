@extends('layouts.app')
@section('title')
    Admin Panel
@endsection

@section('content')
    <div class="project-card-header">
        <div class="header">
            <h1>Admin Panel</h1>
            <div>
                <a href="{{ route('home') }}" class="neumorphic-btn sprints">Home</a>
                <a href="{{ route('signout') }}" class="neumorphic-btn sprints">Logout</a>
            </div>
        </div>
    <div class="project-card-details">

    <a href="{{ route('admin.post.create') }}"  class="neumorphic-btn sprints">Create New Post</a>
    </div>
    </div>
    <div class="project-card-header">
        <h2>All Posts</h2>
    </div>
    <section class="project-cards">
    @foreach ($posts as $post)
        <div class="project-card">
            <div class="project-content">
                <div class="project-card-header">
                <h3>{{ $post->title }}</h3>
                </div>
                <div class="project-card-details">
                    <p class="card-text">{{ $post->content }}</p>
                    <div class="header">
                    <a href="{{ route('admin.post.edit', $post->id) }}" class="neumorphic-btn details">Edit</a>
                    <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="neumorphic-btn delete">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </section>
@endsection
