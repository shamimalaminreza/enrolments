
   @extends('admin_layout')
  @section('admin_content')



			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>



                      <p class="alert-success" style="font-size: 20px;padding: 20px 20px;">
                             <?php
                              //f0 sh0ng message
                              $message=Session::get('message');
                               if ($message) {
                                 echo $message;
                                 Session::put('message',null);
                                }
                          ?>
                         </p>
          



			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>orders</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>orders id</th>
								  <th>Customer name</th>
								  <th>orders total</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   

                            
                    
						  <tbody>
						  	 @foreach($all_order_info as $v_order)
							<tr>
								<td>{{$v_order->order_id}}</td>
								<td class="center">{{$v_order->customer_name}}</td>
								<td class="center">{{$v_order->order_total}}</td>
								<td class="center">{{$v_order->order_status}}</td>

								<td class="center">
                    
                                           
								<?php 
                          if ($v_order->order_status=='pending') {?>	
          <a class="btn btn-danger" href="{{URL::to('/successorder/'.$v_order->order_id)}}" onclick="return confirm('Are you want to success order')">
					<i class="halflings-icon white thumbs-up"></i>  
									</a>
                            <?php  } else{?>
	                     <a class="btn btn-success" href="">
							<i class="halflings-icon white thumbs-down"></i>  
									</a>
                            
                              <?php  }?>

			<a class="btn btn-info" href="{{URL::to('/view-order/'.$v_order->order_id)}}" onclick="return confirm('Are you want to view order')">
										<i class="halflings-icon white edit"></i>  
									</a>
<a class="btn btn-danger" href="{{URL::to('/delitem/'.$v_order->order_id)}}" id="delete" onclick="return confirm('Are you want to delete order')">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								</tr>
                        @endforeach
	              </tbody>
					  </table>            
					</div>
				</div><!--/span-->


	@endsection
