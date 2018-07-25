
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage contact</h2>
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
								  <th>Contact id</th>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Subject</th>
								  <th>Message</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   

                            
                    
						  <tbody>
						  	 @foreach($all_manage_info as $v_info)
							<tr>
								<td>{{$v_info->contact_id}}</td>
								<td class="center">{{$v_info->name}}</td>
								<td class="center">{{$v_info->email}}</td>
								<td class="center">{{$v_info->subject}}</td>
								<td class="center">{{$v_info->message}}</td>

								<td class="center">
                    
                                           
	
                         

			<a class="btn btn-info" href="{{URL::to('/view-contact/'.$v_info->contact_id)}}" onclick="return confirm('Are you want to view contact')">
										<i class="halflings-icon white edit"></i>  
									</a>
<a class="btn btn-danger" href="{{URL::to('/del-contact/'.$v_info->contact_id)}}" id="delete" onclick="return confirm('Are you want to delete order')">
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
