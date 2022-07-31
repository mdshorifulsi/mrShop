@extends('admin_layouts')
@section('title','add Slider')
@section('admin_content')



<div id="page-wrapper">

    
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Slider
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <p class="alert-success">
                                    	<?php
                            $msg=Session::get('msg');
                        if($msg){
                            echo $msg;
                            Session::put('msg',null);
                        }else{

                        }

                        ?>
                        </p>

                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                     <form role="form" action="{{route('store.slider')}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label>Slider name</label>
                                            <input class="form-control" name="name">
                                          
                                        </div>


                                        

                                        <div class="form-group">
                                            <label>Slider image</label>
                                            <input type="file" name="image">
                                        </div>



                                         <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title">
                                          
                                        </div>



                                     

                                         <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="publication_status" value="1">Publication Status
                                    </label>
                                </div>



                                        



                               
                                       


                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        
        </div>
  @endsection