@extends('layouts.app')

@section('content')


<a class="btn btn-primary" href="/posts">Go Back</a>
<h1>{{$post->title}}</h1>
<div>{!!$post->body!!}</div>
{{-- We use !! because we want to parse html. --}}
<hr>
<small>{{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close() !!}
@endsection