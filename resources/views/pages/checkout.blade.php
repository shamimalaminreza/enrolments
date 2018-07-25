@extends('layout')
  @section('content')





<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations" style="width: 47%;padding: 10px 10px;background: #ddd">
				<p>Please use Shipping Details to easily get access to your order history</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
			        
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Shipping Details</p>
							<div class="form-one">
					<form action="{{url('/save-shipping-details')}}" method="post">
									{{csrf_field()}}

						<input type="text" placeholder="Email*" name="shipping_email" required="">
					<input type="text" placeholder="First Name *" name="shipping_first_name" required="">
					<input type="text" placeholder="Last Name *" name="shipping_last_name" required="">
						<input type="text" placeholder="Address 1" name="shipping_address" required="">
					    <input type="text" placeholder="Mobile number" name="shipping_mobile_number" required="">


					    <select id="selectError3" name="shipping_city" required="">
									<option>Select city</option>
                                    
				                   <option value="Dhaka">Dhaka</option>
				                    <option value="Comilla">Comilla</option>
				                   <option value="Chittagong">Chittagong</option>
				                   <option value="Noakhali">Noakhali</option>
				                 

									
								  </select>



        <input type="submit" class="btn btn-info" value="Submit" style="color: #ddd;background: #000">

								</form>
							</div>
							
						</div>
					
					</div>				
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->

      @endsection
