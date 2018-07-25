


  @extends('layout')
  @section('content')

				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_details_by->product_image)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							
						</div>



						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2>{{$product_details_by->product_name}}</h2>
								<p>ID:{{$product_details_by->product_id}}</p>
								<span>
									

				<span>Price:{{$product_details_by->product_price}} TK</span><br></br>




                                      <!-- mthd f0 add t0 cart --> 
                                <form action="{{url('/add-to-cart')}}" method="post">
                                	       {{csrf_field()}}

									<label>Quantity:</label>
									<input type="number" value="1" name="qty" />
		<input type="hidden" value="{{$product_details_by->product_id}}" name="product_id" />

						<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Bye now
									</button>
                                         </form>


                             <form action="{{url('/add-to-Save-list')}}" method="post">
                                        {{csrf_field()}}
                         	<input type="hidden" value="1" name="qty" />

          <input type="hidden" value="{{$product_details_by->product_id}}" name="product_id"/>

                         <button type="submit" class="btn btn-fefault cart" >
										<i class="fa fa-shopping-cart"></i>
										Save to list
									</button>
                               </form>



                             <form action="{{url('/add-to-comparer')}}" method="post">
                                        {{csrf_field()}}
                         	<input type="hidden" value="1" name="qty" />

          <input type="hidden" value="{{$product_details_by->product_id}}" name="product_id"/>

                         <button type="submit" class="btn btn-fefault cart">
										
										Add to comparer
									</button>
                               </form>


								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>{{$product_details_by->manufacture_name}}</p>
								<p><b>Category:</b>{{$product_details_by->category_name}}</p>
								<p><b>Size:</b> {{$product_details_by->product_size}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>


						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >


								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>

							</div>
							
							<div class="tab-pane fade" id="tag" >


								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
							<li><a href=""><i class="fa fa-user"></i>

                           <?php 
                         // $customer_name=Session::get('customer_name');
                             
                           ?>
                              <?php  //Session::get('customer_email');?>


						</a></li>
						<li><a href=""><i class="fa fa-clock-o"></i><?php

						 $dat=date('y-m-d');
						 echo $dat;

						?></a></li>


							<li><a href=""><i class="fa fa-calendar-o"></i><?php
                            $date = date('Y-m-d H:i:s');
                            echo $date;

                             ?></a></li>



									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									

                      
                      <p style="font-size: 20px;padding: 20px 20px;">
                             <?php
                              //f0 sh0ng message
                              $data=Session::get('data');
                               if ($data) {
                                 echo $data;
                                 Session::put('data',null);
                                }
                          ?>
                         </p>

				                   <form action="{{url('/Save-Review')}}" method="post">
											{{csrf_field()}}

										<span>
							<input type="text" placeholder="Your Name" name="name" required=""/>
						<input type="text" placeholder="Email Address" name="email" required=""/>
										</span>

							<textarea name="details" required=""></textarea>

							<input type="submit" class="btn btn-success pull-left" value="Submit">

									</form>

								</div>
							</div>
							
						</div>
					</div>
					        @endsection