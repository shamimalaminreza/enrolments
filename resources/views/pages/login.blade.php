@extends('layout')
  @section('content')



	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

                      
                  <p style="width: 260px;padding: 10px 10px;" class="alert-success">
                             <?php
                              //f0 sh0ng message
                              $exception=Session::get('exception');
                               if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
                            }
                          ?>
                   </p>
						<form action="{{url('/customer-login')}}" method="post">
							           {{csrf_field()}}

				<input type="email" placeholder="Email Address" name="customer_email"/>
							<input type="password" placeholder="Password" name="password" />
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>

                      
                  <p class="alert-success" style="font-size: 20px;padding: 20px 20px;">
                             <?php
                              //f0 sh0ng message
                              $mssas=Session::get('mssas');
                               if ($mssas) {
                                 echo $mssas;
                                 Session::put('mssas',null);
                            }
                          ?>
                   </p>

						<form action="{{url('/customer-registration')}}" method="post">
                              {{csrf_field()}}
							<input type="text" placeholder="Full Name" name="customer_name" />
							<input type="email" placeholder="Email Address" name="customer_email" />
							<input type="password" placeholder="Password" name="password" />
							<input type="text" placeholder="Mobile number" name="mobile_number" />

							<button type="submit" class="btn btn-default">Signup</button>
						</form>


					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


            @endsection
