@extends('layouts.layout')
@section('content')
<a href="{{url('/car/create')}}">اضافة سيارة</a>
<div class="row">
    
    @foreach($Cars as $car)
    <div class="col-md-3">
        <h1><a href="{{url('/id',$car->id)}}">{{$car->car_type}}</a></h1>
        <img src="{{url($car->car_image)}}" width="200" height="200">
        <p>{{$car->car_desc}}</p>
    </div>
    @endforeach
</div>
@endsection