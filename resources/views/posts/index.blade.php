@extends('layouts.app') 
@section('content')
<h1>Posts</h1>
@if(count($posts) > 0) @foreach($posts as $post)
<div class="mb-3">
    {{-- Margin bottom - 5 "mb-5" --}}
    <div class="card">
        <div class="container">
            <a href="/posts/{{$post->id}}">
                <h3>{{$post->title}}</h3>
            </a>
            {{-- Quite nice because we can use logic so integrated --}}
            <p>{!!$post->body!!}</p>
            <small>Written on {{$post->created_at}}</small>
        </div>
    </div>
</div>
@endforeach {{$posts->links()}} @else
<p>No posts found</p>
@endif
@endsection