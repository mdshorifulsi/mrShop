@extends('admin_layouts')
@section('title','Edit Product')
@section('admin_content')



<div id="page-wrapper">

    
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Product
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

                                     <form role="form" action="{{route('update.product',$product->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input class="form-control" name="name" value="{{$product->name}}">
                                          
                                        </div>

                                          <div class="form-group">
                                            <label>Category Name</label>
                                            <select class="form-control" name="category_id">
                                                <option>Category Name</option>
                                                @php 
                                                	$category=App\Category::get();

                                                @endphp
                                               
		
                                                @foreach($category as $row)
                                                
                                                <option value="{{$row->id}}"
                                                	  <?php

                                        if($row->id==$product->category_id)
                                            echo "selected";

                                        ?>
                                                	>{{$row->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>


                                          <div class="form-group">
                                            <label>Manufacture Name</label>
                                            <select class="form-control" name="manufacture_id">
                                                <option>Manufacture Name</option>
                                                @php 
                                                	$manufacture=App\Manufacture::get();

                                                @endphp
                                               
		
                                                @foreach($manufacture as $row)
                                                
                                                <option value="{{$row->id}}"

                                                	 <?php

                                        if($row->id==$product->manufacture_id)
                                            echo "selected";

                                        ?>

                                                	>{{$row->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>





                                   

                                        

                                        <div class="form-group">
                                            <label>Product image</label>
                                            <input type="file" name="image">

                                              <img src="{{URL::to($product->image)}}"style="width: 150px;height: 100px;">
                                            <input type="hidden" name="old_image" value="{{$product->image}}">

                                        </div>

                                         <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" name="price" value="{{$product->price}}">
                                          
                                        </div>


                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control" rows="3" name="description">{{$product->description}}
                                            </textarea>
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