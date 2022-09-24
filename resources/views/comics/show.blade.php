@extends('home')



@section('content')

<ul>
    <li>{{$comic->title}}</li>
    <li>{{$comic->description}}</li>
    <li>{{$comic->thumb}}</li>
    <li>{{$comic->price}}</li>
    <li>{{$comic->series}}</li>
    <li>{{$comic->sale_date}}</li>
    <li>{{$comic->type}}</li>
    
</ul>

<form action="{{route('comics.destroy', $comic->id)}}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">Elimina Fumetto</button>
</form>


@endsection