@extends('layout')
  @section('content')


	<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

                 <?php 
                 //ttal content gl0 ch0la asha akhana
                   $contents=Cart::content();
                 ?>

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="Id">Id</td>
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
                       <?php  
                           $i=1;
                       foreach ($contents as $v_contents) {?>
						<tr>
                           <td class="cart_id">{{$i++}}</td>

							<td class="cart_product">
	<a href=""><img src="{{URL::to($v_contents->options->image)}}" alt="" style="height:80px; width:80px;"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{$v_contents->price}} TK</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">

                             <form action="{{url('/update-cart')}}" method="post">
                             	  {{csrf_field()}}

		<input class="cart_quantity_input" type="number" name="qty" value="{{$v_contents->qty}}" style="width:80px">
		<input type="hidden" name="rowId" value="{{$v_contents->rowId}}">
		<input type="submit" name="submit" value="Update" class="btn btn-sm btn-default">


                                  </form>

								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}} TK</p>
							</td>
							<td class="cart_delete">
	<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

                     <?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->



	

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
			
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::subtotal()}} TK</span></li>
							<li>Eco Tax (10%)<span>{{Cart::tax()}} TK</span></li>
							<!--<li>Shipping Cost <span><?php $x=50;?></span></li>-->
							<li>Total <span>{{Cart::total()}} TK</span></li>
						</ul>


                    <?php 

                    $customer_id=Session::get('customer_id');
                    $shopping_id=Session::get('shopping_id');

                    ?>

                   <?php 
                      if ($customer_id!==NULL) {?>
	<a class="btn btn-default" href="{{URL::to('/checkout')}}" style="margin-left: 40px">Checkout</a>
<a class="btn btn-danger" href="{{URL::to('/')}}" style="margin-left: 40px">Continue Shopping </a>
                       
                  <?php }else{?>
		<a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Login check</a>
                   <?php  }?>

					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->



          @endsection