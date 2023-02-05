@extends('layouts.dashboard')
@section('content')
<div class="text-center">
    <h1>crea un post</h1>

    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <div class="my-3">
            <label class="form-label" for="">Titolo</label>
            <input class="form-control" type="text" name="title">
            @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="my-3">
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" name="body"></textarea>
            @error('body')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
