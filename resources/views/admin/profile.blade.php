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




                      <p class="alert-success" style="font-size: 20px">
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								  <th>Admin id</th>
								  <th>Admin name</th>
								  <th>Admin password</th>
								  <th>Admin phone</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	 @foreach($viewprofile_info as $v_value)
							<tr>
								<td>{{$v_value->admin_id}}</td>
								<td class="center">{{ $v_value->admin_name}}</td>
								<td class="center">{{$v_value->admin_password}}</td>
								<td class="center">{{$v_value->admin_phone}}</td>


								<td class="center">
		
		<a class="btn btn-info" href="{{URL::to('/admin_edit/'.$v_value->admin_id)}}" onclick="return confirm('Are you want to edit profile')"><i class="halflings-icon white edit"></i></a>


		<a class="btn btn-danger" href="{{URL::to('/admin_delete/'.$v_value->admin_id)}}" onclick="return confirm('Are you want to delete profile')"><i class="halflings-icon white trash"></i></a>
								</td>
							</tr>
							   @endforeach
						</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->




 @endsection
