@extends('layouts.app')
@section('content')

<style>
    
    th{
        text-align:center;
    }
    td #title{
       width:400px; 
    }
    td #action{
        width:100px
    }
    td img{
       width:640px;
       height:370px
    }
</style>


<div class="row" >
<!-- start model -->

   

<br> <br>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg col-md-offset-5" data-toggle="modal" data-target="#myModal">اضافة جديد   </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
        <div class="container">
           
            <form action="/addphones" method="post" enctype="multipart/form-data" >
       
            <div class="form-group col-md-12">
                <label for="" class="control-label"> الاسم  </label>
                <input type="text" name="company_name" class="form-control" style="width: 49%;">
               
            </div>
            <div class="form-group col-md-12">
                <label for="" class="control-label"> رقم الهاتف </label>
                <input type="number" name="phone_number" class="form-control" style="width: 49%;">
               
            </div>
         
           <input type="submit" value="حفظ" class="btn btn-success form-control" style="width: 49%;">
           <input type="hidden" value="{{ csrf_token() }}" name="_token">
 
            </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- end model-->









<br><br>
<div class="col-lg-12">
                    <h3 class="page-header" style="text-align:right;padding-right:30px">تمت اضافتهم مسبقا</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>العنوان</th>
                                           
                                            <th>رقم الهاتف</th>
                                           
                                           
                                 
                                            <th style="background-color:#d9534f;color:white" >حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($phone as $value)
                                        <tr class="odd gradeX">
                                            <td id="title">{{$value->company_name}}</td>
                                            <td id="title">{{$value->phone_number}}</td>
                                          
                                           
                                            <td d="action" class="centen-r"  style="text-align:center"> <button class="btn btn-danger"> <a href="/delete_phone/{{$value->id}}" style="color:white"> حذف</a></button> </td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

   

@endsection
