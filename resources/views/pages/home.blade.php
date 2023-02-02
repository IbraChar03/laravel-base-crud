@extends('layouts.main-layout')
@section('content')
<h1>LIST OF SAINTS</h1>
<ul>
    @foreach ($saints as $saint)
    <a href="/saint/{{$saint -> id}}">
        <li>
            <strong>Name :</strong> {{$saint -> name}}
        </li>
    </a>
    <br>

    @endforeach
</ul>
@endsection