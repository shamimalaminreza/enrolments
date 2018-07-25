

   @extends('admin_layout')
  @section('admin_content')


    <div class="row-fluid sortable">
				<div class="box span12">


					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>


					<div class="box-content">
                      <p class="alert-danger" style="font-size: 20px">
                             <?php
                              //f0 sh0ng message
                              $message=Session::get('message');
                               if ($message) {
                                 echo $message;
                                 Session::put('message',null);
                                }
                          ?>
                         </p>



<form class="form-horizontal" action="{{URL::to('/updte_admin',$all_admin_info->admin_id)}}" method="post">
                       {{csrf_field()}}

							<fieldset>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Admin email</label>
								<div class="controls">
			<input class="input-xlarge focused" id="focusedInput" type="text" value="{{$all_admin_info->admin_email}}"  name="admin_email">
								</div>
							  </div>



                             <div class="control-group">
								<label class="control-label" for="focusedInput">Admin name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="{{$all_admin_info->admin_name}}" name="admin_name">
								</div>
							  </div>


							  <div class="control-group">
								<label class="control-label" for="focusedInput">Admin password</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="{{$all_admin_info->admin_password}}" name="admin_password">
								</div>
							  </div>


                        <div class="control-group">
								<label class="control-label" for="focusedInput">Admin phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="{{$all_admin_info->admin_phone}}" name="admin_phone">
								</div>
							  </div>


							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>


							</fieldset>
						  </form>
					
					</div>

				</div><!--/span-->
			
			</div><!--/row-->


	@endsection
