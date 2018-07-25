

   @extends('admin_layout')
  @section('admin_content')


    
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Update manufacture</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

                     
<form class="form-horizontal" action="{{url('/update-manufacture',$all_manufacture_info->manufacture_id)}}" method="post">
							        {{csrf_field()}}

						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Manufacture name </label>
							  <div class="controls">
		<input class="input-xlarge focused" id="focusedInput" type="text" name="manufacture_name" value="{{$all_manufacture_info->manufacture_name}}">
							  </div>
							</div>


							

							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Manufacture description</label>
							  <div class="controls">
			     <textarea class="cleditor" id="textarea2" rows="3" name="manufacture_description">
				
                     {{$all_manufacture_info->manufacture_description}}

			     </textarea>
							  </div>
							</div>



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->


	@endsection
