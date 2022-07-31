@extends('layouts')
@section('title','payment')

@section('content')


<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">your Cart </h3>
							</div>

							@php
		$content=Cart::content()
		

		

		@endphp
							<table class="shopping-cart-table table">
								<thead>

									<tr>
										<th>Image</th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										
									</tr>
								</thead>

								<tbody>

									@foreach($content as $v_content)
									<tr>
										<td class="thumb"><img src="{{asset($v_content->options->image)}}" alt="" style="width: 130px;height: 100px;"></td>
										
										<td class="price text-center"><strong>{{$v_content->price}}</strong><br><del class="font-weak"></td>

										<td class="qty text-center">

											
									{{$v_content->qty}}
									
								


										</td>


										<td class="total text-center"><strong class="primary-color">{{$v_content->total}}Tk</strong></td>

									

									</tr>

									@endforeach
									
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">{{Cart::subtotal()}} Tk</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>Text</th>
										<td colspan="2">Free Text</td>
									</tr>

									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">{{Cart::total()}} Tk</th>
									</tr>
								</tfoot>
							</table>



				
						</div>

					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">

				
						
						<form action="{{route('order_place')}}" method="post">
							@csrf
							

						<h2 class="headingTop text-center">Select Your Payment</h2><br>	
								
						<h4 class="text-center"><input type="radio" name="payment_method" value="handcash"> Hand Cash <br/> 
						</h4>
						<h4 class="text-center"><input type="radio" name="payment_method" value="bkash"> B-kash <br/> </h4>
				
						<h4 class="text-center"><input type="radio" name="payment_method" value="cart"> Debit Cart<br/> </h4>
						
						<br>
						
						

						<h4 class="text-center"><input type="submit" name="" value="Done"> 
							<br><br><br><br><br>
					
					</form>
								
							


						</div>
					</div>

				
@endsection