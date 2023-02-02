@extends('layouts.main-layout')
@section('content')
<h1>SAINT DETAILS</h1>
<ul>

    <li>
        <strong>Name :</strong> {{$saint -> name}} <br>
        <strong>Birth Place : </strong> {{$saint -> birth_place}} <br>
        <strong>Blessing Date :</strong> {{$saint -> blessing_date}} <br>
        <strong>Miracles Number :</strong> {{$saint -> miracles_number}}
    </li>
</ul>
@endsection