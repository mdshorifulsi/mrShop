@extends('layouts')
@section('title','Product Details')

@section('content')
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->

				
				
				<div class="product product-details clearfix">


				

					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="{{asset($product->image)}}" alt="" style="width: 400px; height: 400px;">
							</div>
							<div class="product-view">
								<img src="{{asset($product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{asset($product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{asset($product->image)}}" alt="">
							</div>
						</div>
					
					</div>

					

					<div class="col-md-6">
						<div class="product-body">
							
							<h2 class="product-name">Product Name: {{$product->name}}</h2>
							<h3 class="product-price">Price: {{$product->price}} Tk </h3>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								
							</div>
							<p><strong>Availability:</strong> In Stock</p>
							<p><strong>Brand: </strong>{{$product->manufacture->name}}</p>
							<p>{{$product->description}}</p>
							
							<form action="{{route('add_cart')}}" method="post">
								@csrf
							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="text" name="qty" value="1">

									
										<input type="hidden" name="id" value="{{$product->id}}">

								</div>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								
							</div>

							</form>


						</div>
					</div>

				

				</div>



				
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>


@endsection