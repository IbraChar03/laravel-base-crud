@extends('layouts.main-layout')
@section('content')
<h1>CREATE A NEW SAINT</h1>
<form action="{{route('saint.request')}}"
    method="POST">
    @csrf

    <label for="name">Name : </label>
    <input type="text"
        name="name">
    <br> <br>
    <label for="birth_place">Birth Place : </label>
    <input type="text"
        name="birth_place">
    <br> <br>
    <label for="blessing_date">Blessing Date : </label>
    <input type="date"
        name="blessing_date">
    <br> <br>
    <label for="miracles_number">Miracles Number : </label>
    <input type="number"
        name="miracles_number">
    <br> <br>
    <input type="submit"
        value="CREATE">
</form>

@endsection