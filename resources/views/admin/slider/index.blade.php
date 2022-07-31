@extends('admin_layouts')
@section('title','ALl Product')
@section('admin_content')



<div id="page-wrapper">


<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ALl Product
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <p class="alert-success"><?php
                            $msg=Session::get('msg');
                        if($msg){
                            echo $msg;
                            Session::put('msg',null);
                        }else{

                        }
                        ?>
                        </p>
                             <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL no</th>
                                   
                                        <th>Slider Name</th>
                                        <th>Title </th>
                                       
                                       
                                        <th>Product Image</th>
                                   
                                   
                                       
                                        <th>Action</th>

                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slider as $row)


                                    <tr class="odd gradeX">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->title}}</td>
                                       

                                   
                                        
                                         <td><img src="{{ asset($row->image)}}"style="width:200px;height:100px;"></td>
                                        
                                        
                                            

                                      
                                        <td>

                      

                                    <!-- 
                                    <a class="btn btn-warning" href="">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a> -->

                                    <a class="btn btn-danger" href="{{route('delete.slider',$row->id)}}">
                                                                        
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
            </div>

            @endsection
