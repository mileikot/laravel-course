@extends('app-layout')

@section('content')
    <div class="mt-10 space-y-5 prose max-w-none">
        <h1 class="not-prose text-2xl font-bold">{{$post->title}}</h1>
        <div>Posted {{$post->date->diffForHumans()}} by {{$post->author}}</div>
        <div>{{$post->contents}}</div>
    </div>
@endsection
