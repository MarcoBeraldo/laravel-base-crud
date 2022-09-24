@extends('home')

@section('title', 'List')

@section('content')
    @foreach($comics as $comic)
<a href="{{route('comics.show', $comic->id) }}">{{$comic->title}}</a>
    @endforeach
@endsection