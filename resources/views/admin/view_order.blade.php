
   @extends('admin_layout')
  @section('admin_content')
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Customer name</th>
									  <th>Mobile</th>
									                                           
								  </tr>
							  </thead>   
							  <tbody>


								<tr>
								
									<td class="center">{{$order_by_id->customer_name}}</td>
									<td class="center">{{$order_by_id->mobile_number}}</td>
								
                                
								</tr>
								                 
							  </tbody>
						 </table>  
						 
					</div>
				</div><!--/span-->
				
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Address</th>
									  <th>Mobile</th>
									 <th>email</th>
                                        
								  </tr>
							  </thead>   
							  <tbody>

								<tr>
		

									<td class="center">{{$order_by_id->shipping_first_name}}</td>
									<td class="center">{{$order_by_id->shipping_address}}</td>
									<td class="center">{{$order_by_id->shipping_mobile_number}}</td>
									<td class="center">{{$order_by_id->shipping_email}}</td>

								</tr>

								                         
							  </tbody>
						 </table>  
						
					</div>
				</div><!--/span-->
			</div><!--/row-->
			



			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Details order</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
								  	 <th>Serial</th>
									  <th>product name</th>
									  <th>product price</th>
									  <th>product sales quantity</th>
									  <th>product sub total</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
						  	
								<tr>
									<td class="center">{{$order_by_id->order_id}}</td>
									<td class="center">{{$order_by_id->product_name}}</td>
									<td class="center">{{$order_by_id->product_price}}</td>
									<td class="center">{{$order_by_id->product_sales_quantity}}</td> 
	    <td class="center">{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td> 
								</tr>
                            
							  </tbody>

                              <tfoot>
                              	

                               <tr>
                               	
                               	<td colspan="4">Total with vat:</td>
                               	<td>{{$order_by_id->order_total}} TK</td>
                               </tr>
                            
                                   <tr>
                                   	
                                <td></td>
                                   </tr>


                              </tfoot>
						 </table> 
		<button type="submit" class="btn btn-primary"  onclick="print()">print</button>

					</div>
				</div><!--/span-->
			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->




	@endsection
