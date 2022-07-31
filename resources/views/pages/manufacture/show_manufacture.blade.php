@extends('layouts')
@section('title','manufacture by product')

@section('content')

    
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
         










            
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Product For You</h2>
                    </div>
                </div>
                <!-- section title -->

                <!-- Product Single -->

                @foreach($product_by_manufacture as $v_product_by_manufacture)

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="{{route('view_product',$v_product_by_manufacture->id)}}"> Quick view</button>
                            <img src="{{asset($v_product_by_manufacture->image)}}" alt="" style="width: 250px;height: 300px">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">{{$v_product_by_manufacture->price}} Tk</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">{{$v_product_by_manufacture->name}}</a></h2>
                           
                        </div>
                    </div>
                </div>

                @endforeach
                <!-- /Product Single -->

                <!-- Product Single -->
               
                <!-- /Product Single -->

                <!-- Product Single -->
               
                <!-- /Product Single -->
            </div>




            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection