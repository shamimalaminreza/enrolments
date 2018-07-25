
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>All products</h2>
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
								  <th>Product id</th>
								  <th>Product name</th>
                                   <th>Product image</th>
								  <th>Product price</th>
								  <th>Category name</th>
								  <th>Manufacture name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   

                            
                    
						  <tbody>
						  	 @foreach($all_product_info as $v_value)
							<tr>
								<td>{{$v_value->product_id}}</td>
								<td class="center">{{$v_value->product_name}}</td>
             <td class="center"><img src="{{URL::to($v_value->product_image)}}" height="80" width="100"></td>
								<td class="center">{{$v_value->product_price}} TK</td>
								<td class="center">{{$v_value->category_name}}</td>
								<td class="center">{{$v_value->manufacture_name}}</td>


								<td class="center">

                                      @if($v_value->publication_status==1)

                               <span class="label label-success">Active</span>

                                       @else
						<span class="label label-danger">inactive</span>

                                      @endif
								</td>



								<td class="center">

									 @if($v_value->publication_status==1)
	         <a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_value->product_id)}}"   onclick="return confirm('Are you want to unactive product')">


							<i class="halflings-icon white thumbs-down"></i>  
									</a>
                                         @else
          <a class="btn btn-success" href="{{URL::to('/active_product/'.$v_value->product_id)}}" onclick="return confirm('Are you want to active product')">

										<i class="halflings-icon white thumbs-up"></i>  
									</a>
                                      @endif


			<a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_value->product_id)}}" onclick="return confirm('Are you want to edit product')">


										<i class="halflings-icon white edit"></i>  
									</a>
<a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_value->product_id)}}" id="delete">
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
