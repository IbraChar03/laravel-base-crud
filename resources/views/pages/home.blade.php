@extends('layouts.main-layout')
@section('content')
<h1>LIST OF SAINTS</h1>
<ul>
    @foreach ($saints as $saint)
    <li>
        {{$saint -> name}} <br>
        {{$saint -> birth_place}} <br>
        {{$saint -> blessing_date}} <br>
        {{$saint -> miracles_number}}
    </li>
    <br>

    @endforeach
</ul>
@endsection