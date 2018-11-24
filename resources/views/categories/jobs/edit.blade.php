@extends('layouts.app')
@section('content')

<div class="row" style="margin-right: 130px;"><br> <br>
<h2 style="text-align: right">تعديل الوظيفة </h2>
@foreach ($jobs as $value)

<form action="/edit_jobs/{{$value->id}}" method="post" enctype="multipart/form-data" >
  
 
  

       
<div class="form-group col-md-12">
<label for="" class="control-label">   العنوان    </label>
<input type="text" name="title" class="form-control" style="width: 60%;" value=" {{$value->title}}">

</div>
<div class="form-group col-md-12">
<label for="" class="control-label"> العمر  </label>
<input type="number" name="age" class="form-control" style="width: 60%;" value="{{$value->age}}">

</div>

<div class="form-group col-md-12">
<label for="" class="control-label"> الجنس  </label>
<select name="gender" id="" class=" form-control " style="width: 60%;" value=" {{$value->gender}}">
<option value="1">ذكر</option>
<option value="2">انثى</option>
</select>
</div>

<div class="form-group col-md-12">
<label for="" class="control-label">صورة </label>
<input type="file" name="age" class="form-control" style="width: 60%;" value=" {{$value->image}}">

</div>
<div class="form-group col-md-12">
<label for="" class="control-label">التخصص </label>
<input type="text" name="specialization" class=" form-control" style="width: 60%;" value=" {{$value->specialization}}" >
</div>
<div class="form-group col-md-12">
<label for="" class="control-label">الخبرة </label>
<input type="text" name="experiences" class=" form-control" style="width: 60%;"  value=" {{$value->experiences}}">
</div>

<input type="submit" value="حفظ" class="btn btn-success form-control" style="width: 60%;">
<input type="hidden" value="{{ csrf_token() }}" name="_token">

       </form>
       @endforeach 
</div>
@endsection