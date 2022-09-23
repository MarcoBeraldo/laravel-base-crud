@extends('home')

@section('title', 'List')

@section('content')
    @foreach($comics as $comic)
{{$comic->title}}
    @endforeach
@endsection