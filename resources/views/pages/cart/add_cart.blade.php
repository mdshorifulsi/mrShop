@extends('layouts')
@section('title','Cart')

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
										<th class="text-right">Action</th>
									</tr>
								</thead>

								<tbody>

									@foreach($content as $v_content)
									<tr>
										<td class="thumb"><img src="{{asset($v_content->options->image)}}" alt="" style="width: 130px;height: 100px;"></td>
										
										<td class="price text-center"><strong>{{$v_content->price}}</strong><br><del class="font-weak"></td>

										<td class="qty text-center">

											<form action="{{route('update_cart',$v_content->rowId)}}" method="post">
									@csrf
									<input class="cart_quantity_input" type="text" name="qty" value="{{$v_content->qty}}" autocomplete="off" size="2">
									
									<input type="hidden" name="rowId" value="{{$v_content->rowId}}" >

									<input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
									</form>


										</td>


										<td class="total text-center"><strong class="primary-color">{{$v_content->total}}Tk</strong></td>

										<td></td>
										 <td class="total text-center"><a href="{{route('delete_cart',$v_content->rowId)}}" class="btn btn-danger btn-sm">X</a></td>

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
							<div class="pull-right">
								
								

									   <?php
                      $customer_id=Session::get('customer_id');
                      $shipping_id=Session::get('shipping_id');
                      // print_r($customer_id);
                      // print_r($shipping_id);
                      if($customer_id!=NULL && $shipping_id=NULL){?>

                      
                        <button class="primary-btn"><a href="{{route('checkout')}}">Checkout</button>

                       
                           <?php }  if($customer_id!=NULL && $shipping_id !=NULL){?>
                      
                        <button class="primary-btn"><a href="{{route('payment')}}">Checkout</button>
                       <?php
                  } else{

                    ?>


                
                       <button class="primary-btn"><a href="{{route('login_check')}}">Checkout</button>
                     <?php } ?>



							</div>
						</div>

					</div>

					@endsection