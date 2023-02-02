@extends('layouts.main-layout')
@section('content')
<h1>LIST OF SAINTS</h1>
<ul>
    @foreach ($saints as $saint)
    <a href="/saint/{{$saint -> id}}">
        <li>
            <strong>Name :</strong> {{$saint -> name}} <br>
            <strong>Birth Place : </strong> {{$saint -> birth_place}} <br>
            <strong>Blessing Date :</strong> {{$saint -> blessing_date}} <br>
            <strong>Miracles Number :</strong> {{$saint -> miracles_number}}
        </li>
    </a>
    <br>

    @endforeach
</ul>
@endsection