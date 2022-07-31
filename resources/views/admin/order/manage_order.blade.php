
@extends('admin_layouts')

@section('title','Order')
@section('admin_content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><h4>Manage Order</h4></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       <!-- <a class="btn btn-info" href="#">Add User</a> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>order Id</th>
                                        <th>Customer Name</th>
                                        <th>order Total</th> 
                                        <th>Order Date&Time</th> 
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                   
                             @foreach($all_order as $v_order)
                         
                                       
                                    <tr class="odd gradeX">
                                        <td>{{$v_order->order_id}}</td>
                                        <td>{{$v_order->customer_name}}</td>
                                        <td>{{$v_order->order_total}}</td>
                                        <td>{{$v_order->created_at}}</td>
                                        <td>{{$v_order->order_status}}</td>
                                       
                                       <!--  <td class=""><img src=""style="width:200px;height:100px;"></td> -->
                                     
                                           

                            <td>
                           @if($v_order->order_status=='pending')
                            <a class="btn btn-success" href="">
                                <i class="glyphicon glyphicon-thumbs-down"></i>
                             
                            </a>
                           
                              @else
                        
                            <a class="btn btn-danger" href="">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                             
                            </a>
                            @endif

           




            <a class="btn btn-warning" href="">
                <i class="glyphicon glyphicon-edit icon-white"></i>
             
            </a>

            <a class="btn btn-danger" href="">
                                                
                <i class="glyphicon glyphicon-trash icon-white"></i>
               

            </a>

</td>
                                       

                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
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