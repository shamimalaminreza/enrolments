
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
                              $exception=Session::get('exception');
                               if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
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
								  <th>Category id</th>
								  <th>Category name</th>
								  <th>Category description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   

                            
                    
						  <tbody>
						  	 @foreach($all_category_info as $v_value)
							<tr>
								<td>{{$v_value->category_id}}</td>
								<td class="center">{{$v_value->category_name}}</td>
								<td class="center">{{$v_value->category_description}}</td>


								<td class="center">

                                      @if($v_value->publication_status==1)

                               <span class="label label-success">Active</span>

                                       @else
						<span class="label label-danger">inactive</span>

                                      @endif
								</td>



								<td class="center">

									 @if($v_value->publication_status==1)
	         <a class="btn btn-danger" href="{{URL::to('/unactive_category/'.$v_value->category_id)}}"   onclick="return confirm('Are you want to unactive category')">


							<i class="halflings-icon white thumbs-down"></i>  
									</a>
                                         @else
          <a class="btn btn-success" href="{{URL::to('/active_category/'.$v_value->category_id)}}" onclick="return confirm('Are you want to active category')">

										<i class="halflings-icon white thumbs-up"></i>  
									</a>
                                      @endif


			<a class="btn btn-info" href="{{URL::to('/edit-category/'.$v_value->category_id)}}" onclick="return confirm('Are you want to edit category')">


										<i class="halflings-icon white edit"></i>  
									</a>
<a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_value->category_id)}}" id="delete">
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
