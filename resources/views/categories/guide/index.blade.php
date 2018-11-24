@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.12/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.12/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.12/js/uikit-icons.min.js"></script>
<br>
<style>
h3{
    text-align:center;
}
</style>

@foreach ($category as $value)
<div class="col-md-3">

        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title" style="text-align:center;">
                <a href="/addcompany/{{$value->id}}">  {{$value->category_name}}</a>
              
                <a href=""></a>
                </h3>
            </div>
        </div>
  
   
</div>

</div>
@endforeach
@endsection
