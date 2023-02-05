@extends('layouts.dashboard')
@section('content')
<div class="text-center">
    <h1>Modifica il post: {{$post->title}}</h1>

    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="my-3">
            <label class="form-label" for="">Titolo</label>
            <input value="{{$post->title}}" class="form-control" type="text" name="title">
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="my-3">
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" name="body">{{$post->body}}</textarea>
            @error('body')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>
@endsection
