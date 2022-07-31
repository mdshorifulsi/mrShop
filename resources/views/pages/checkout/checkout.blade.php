@extends('layouts')
@section('title',' Your Bill')

@section('content')

<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">



				
					<div class="col-md-6">
						<div class="billing-details">
							
							<div class="section-title">
								<h5 class="title">Bill To</h5>
							</div>

							<form action="{{route('shipping_details')}}" method="post">
								@csrf

							<div class="form-group">
								<input class="input" type="text" name="shipping_name" placeholder="Name *">
							</div>


								<div class="form-group">
								<input class="input" type="email" name="shipping_email" placeholder="Email *">
							</div>


							<div class="form-group">
								<input class="input" type="text" name="shipping_phone" placeholder="Phone *">
							</div>


						
							<div class="form-group">
								<input class="input" type="text" name="shipping_address" placeholder="Address *">
							</div>
							

							
							<div>
							<button type="submit" name="submit" class="btn login_btn">Log in</button>
</div>
							
							</form>



						
						</div>
					</div>

				
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>


@endsection