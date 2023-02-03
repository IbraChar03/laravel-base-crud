@extends('layouts.main-layout')
@section('content')
<h1>LIST OF SAINTS</h1>
<h3>
    <a href="{{route('saint.create')}}">
        Create a New Saint </a>
</h3>
<ul>
    @foreach ($saints as $saint)
    <li>
        <a href="{{route('saint.search' , ['id' => $saint -> id])}}">
            <strong>Name :</strong> {{$saint -> name}}
        </a>
        <span>-</span>
        <a href="{{route('saint.destroy',['id' => $saint -> id])}}">Delete</a>
    </li>


    <br>

    @endforeach
</ul>
@endsection