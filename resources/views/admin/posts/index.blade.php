@extends('layouts.dashboard')

@section('content')

<a href="{{route('admin.posts.create', post->id)}}">Crea nuovo post</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
        <tr>
            <th scope="row">1</th>
            <td>{{$post->id}}</td>
            <td>
                <a href="{{route('admin.posts.show', $post->id)}}">
                    {{$post->title}}
                </a>
                </td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('admin.posts.edit', post->id)}}">
                    edit
                    </a>


                    <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Delete
                            </button>

                    </form>
                    {{-- <a href="{{route('admin.posts.delete', post->id)}}">
                        delete
                        </a> --}}

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $post->title }}
    </div>


    {{ $posts->links() }}

    @endsection
