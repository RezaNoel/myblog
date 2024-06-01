@extends('layouts.app')
@section('title')
    Edit Post
@endsection

@section('content')
    <div class="project-card-header">
        <h1>Edit Post</h1>
    </div>
<form action="{{ route('admin.post.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="project-card">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="neumorphic-btn details">Update</button>
    </div>
</form>
<div class="project-card-details">
    <a href="{{ route('admin.index') }}" class="neumorphic-btn sprints">Back to Admin Panel</a>
</div>
@endsection
