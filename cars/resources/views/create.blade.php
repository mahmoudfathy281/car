@extends('layouts.layout')
    @section('content')
<form action="{{url('car/add')}}" method="post" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
          <label for="exampleInputName">اسم السيارة</label>
        <input type="text" name="car_name" value="{{old('car_name')}}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputdesc">وصف السيارة</label>
            <textarea class="form-control" value="{{old('car_desc')}}" name="car_desc" id="exampleInputdesc" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputImage">صورة السيارة</label>
          <input type="file" name="image" class="form-control" id="exampleInputImage" aria-describedby="iamgeHelp">
        </div>
        <button type="submit" class="btn btn-primary">اضف السيارة</button>
      </form>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
@endif
@endsection