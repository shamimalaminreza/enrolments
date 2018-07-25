
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
							<td class="description" style="margin-left: 30px">Name</td>
							<td class="price">Price</td>
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

							<td class="cart_description" style="margin-left: 30px">
								<h4><a href="">{{$v_contents->name}}</a></h4>
							</td>

							<td class="cart_price">
								<p>{{$v_contents->price}} TK</p>
							</td>

							
							
							<td class="cart_delete">


 <a class="cart_quantity_delete" href="" style="background: green">Buy Now<i class="fa fa-times"></i></a> ||


<a class="cart_quantity_delete" href="{{URL::to('/delete-to-list/'.$v_contents->rowId)}}" style="background:red">Remove<i class="fa fa-times"></i></a>

							</td>
						</tr>
  <?php }?>
                     
					</tbody>

				</table>
<a class="btn btn-danger" href="{{URL::to('/')}}" style="margin-left: 40px;text-align: center;">Continue Shopping </a>

			</div>
		</div>
	</section> <!--/#cart_items-->



















	@endsection
