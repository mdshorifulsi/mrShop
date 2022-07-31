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
                                   
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Manufacture Name</th>
                                       
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                   
                                        <th>Category description</th>
                                        <th>Action</th>

                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product as $row)


                                    <tr class="odd gradeX">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->category->name}}</td>
                                        <td>{{$row->manufacture->name}}</td>

                                   
                                        
                                         <td><img src="{{ asset($row->image)}}"style="width:200px;height:100px;"></td>
                                        
                                         <td>{{$row->price}}Tk</td>
                                         <td>{{$row->description}}</td>
                                        
                                            

                                              <td>
                                        @if($row->publication_status==1)
                                        <span class="label label-success">Active</span>
                                       @else
                                        <span class="label label-danger">Unactive</span>
                                    @endif
                                        </td>
                                        <td>

                           @if($row->publication_status==1)
                            <a class="btn btn-success" href="{{route('unactive',$row->id)}}">
                                <i class="glyphicon glyphicon-thumbs-down"></i>
                             
                            </a>
                           
                              @else
                        
                            <a class="btn btn-danger" href="{{route('active',$row->id)}}">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                             
                            </a>
                            @endif

                                    
                                    <a class="btn btn-warning" href="{{route('edit.product',$row->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a>

                                    <a class="btn btn-danger" href="{{route('delete.product',$row->id)}}">
                                                                        
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
