@extends('layout')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="login-form"><!--login form-->
						<h2>Your Profile Details</h2>


                       <?php 

                         
                        $data=DB::table('tbl_customer')->get();
                       ?>



                     <p class="alert-success" style="font-size: 20px;padding: 20px 20px;">
                             <?php
                             $massg=Session::get('massg');
                             if ($massg) {
                             echo $massg;
                             Session::put('massg',null);
                            }
                          ?>
                     </p>


                         <?php 

                      foreach ($data as  $value) {?>
                      <?php }?>
	<form action="{{URL::to('/update_customer',$value->customer_id)}}" method="post">

                          {{csrf_field()}}
                         <label>Customer name</label>
					<input type="text" placeholder="Name" name="customer_name" value="{{$value->customer_name}}" required=""/>

                 <label>Customer email</label>
					<input type="text" placeholder="Name" name="customer_email" value="{{$value->customer_email}}"" required=""/>

                    <label>Customer password</label>
					<input type="text" placeholder="Name" name="password" value="{{$value->password}}"" required=""/>

                       <label>Mobile number</label>
					<input type="text" placeholder="Name" name="mobile_number"
					 value="{{$value->mobile_number}}" required=""/>

					 <button type="submit" class="btn btn-default">Update Details</button>


						</form>
					
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->

	@endsection
