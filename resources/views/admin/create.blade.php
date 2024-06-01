@extends('layouts.app')
@section('title')
    Create Post
@endsection

@section('content')
    <div class="project-card-header">
    <h1>Create Post</h1>
    </div>
<form action="{{ route('admin.post.store') }}" method="POST">
    @csrf
    <div class="project-card">

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <button type="submit" class="neumorphic-btn details">Create</button>
    </div>
</form>
<div class="project-card-details">
    <a href="{{ route('admin.index') }}" class="neumorphic-btn sprints">Back to Admin Panel</a>
</div>
@endsection
