
   @extends('admin_layout')
  @section('admin_content')
			

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
								 <th>Contact id</th>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Subject</th>
								  <th>Message</th>
								  <th>Actions</th>            
								  </tr>
							  </thead>   



						  <tbody>
							<tr>
								<td>{{$order_by_id->contact_id}}</td>
								<td class="center">{{$order_by_id->name}}</td>
								<td class="center">{{$order_by_id->email}}</td>
								<td class="center">{{$order_by_id->subject}}</td>
								<td class="center">{{$order_by_id->message}}</td>
								<td class="center">
       <a class="btn btn-info" href="{{URL::to('/view-contacts/'.$order_by_id->contact_id)}}">
	<i class="halflings-icon white edit"></i>  
									</a>

								</td>
								</tr>
	              </tbody>

               
						 </table> 

					</div>
				</div><!--/span-->
			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->




	@endsection
