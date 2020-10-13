@extends('layouts.layout')
@section('content')
        <h1>{{$cars->car_name}}</h1>
        <p>{{$cars->car_desc}}</p>
        <a href="{{url('/car')}}" class="btn btn-danger">رجوع</a>
    @endsection