@extends('layouts.app')
@section('content')

<div class="row" style="margin-right: 130px;">
@foreach ($companyDetails as $value)
<form action="/edit_company/{{$company->id}}" method="post" enctype="multipart/form-data" >
      {{$companyDetails}}
       <div class="form-group col-md-10">
           <label for="" class="control-label"> الاسم الرئيسي </label>
           <input type="text" name="company_name" class="form-control" value="{{$company->company_name}}">
          
       </div>
      
       <div class="form-group col-md-10">
           <label for="" class="control-label"> الايميل </label>
           <input type="text" name="email" class="form-control"value="{{$value->email}}" >
          
       </div>
    
       <div class="form-group col-md-10">
           <label for="" class="control-label"> رقم الهاتف </label>
           <input type="text" name="tele" class="form-control" value="{{$value->phone_number}}">
          
       </div>
   
       <div class="form-group col-md-10">
           <label for="" class="control-label">العنوان</label>
           <input type="text" name="location" class=" form-control" value="{{$value->location}}">
           {{$company->location}}
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label">الموقع على الخريطة</label>
           <input type="text" name="location_map" class=" form-control" value="{{$value->map}}">
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label"> شعار الشركة </label>
           <input type="file" name="company_logo" class=" form-control" value="{{$company->company_logo}}">
       
       </div>
      
       <div class="form-group col-md-10">
           <label for="" class="control-label"> صورة للشركة </label>
           <input type="file" name="image" class=" form-control" value="{{$value->image}}">
       </div>
       <div class="form-group col-md-10">
           <label for="" class="control-label">تفاصيل </label>
           <textarea  name="company_details" class=" form-control"  >"{{$company->subject}}</textarea>
       </div>
      <input type="submit" value="حفظ" class="btn btn-success form-control" style="width: 82%;">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
   
       </form>
       @endforeach
</div>
@endsection