@extends('admin_layouts')
@section('title','ALl Manufacture')
@section('admin_content')



<div id="page-wrapper">


<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        ALl Manufacture
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
                                   
                                        <th>Manufacture Name</th>
                                       
                                        <th>Manufacture Image</th>
                                   
                                        <th>Manufacture description</th>
                                        <th>Action</th>

                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($manufacture as $row)


                                    <tr class="odd gradeX">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>

                                   
                                        
                                         <td><img src="{{ asset($row->image)}}"style="width:200px;height:100px;"></td>
                                        
                                         <td>{{$row->description}}</td>
                                        
                                            
                                        <td>

                       

                                    
                                    <a class="btn btn-warning" href="{{route('edit.manufacture',$row->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                     
                                    </a>

                                    <a class="btn btn-danger" href="{{route('delete.manufacture',$row->id)}}">
                                                                        
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