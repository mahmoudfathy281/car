@extends('layouts.layout')
@section('content')
@foreach ($drivers as $driver)
<p>{{$driver->driver_name}}</p>
@endforeach
@endsection
