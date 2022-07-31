@extends('layouts')
@section('title','customer Login')

@section('content')

<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">



				
					<div class="col-md-6">
						<div class="billing-details">
							
							<div class="section-title">
								<h5 class="title">Customer Login</h5>
							</div>

							<form action="{{route('customer_registration')}}" method="post">
								@csrf


							<div class="form-group">
								<input class="input" type="text" name="customer_name" placeholder="Name *">
							</div>

							<div class="form-group">
								<input class="input" type="email" name="customer_email" placeholder="Email *">
							</div>

							<div class="form-group">
								<input class="input" type="Password" name="customer_password" placeholder="Password *">
							</div>

							<div class="form-group">
								<input class="input" type="text" name="customer_phone" placeholder="Phone *">
							</div>
							<div>
							<button type="submit" name="submit" class="btn login_btn">Log in</button>
</div>
							
							</form>
						
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h5 class="title">Customer Registation</h5>
							</div>
						
							<form action="{{route('customer_login')}}" method="post">
								@csrf


							
							<div class="form-group">
								<input class="input" type="email" name="customer_email" placeholder="Email *">
							</div>

							<div class="form-group">
								<input class="input" type="Password" name="customer_password" placeholder="Password *">
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