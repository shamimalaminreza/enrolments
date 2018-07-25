

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
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

                      
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




             <form class="form-horizontal" action="{{url('/save-category')}}" method="post">
							        {{csrf_field()}}

						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Category name </label>
							  <div class="controls">
		<input class="input-xlarge focused" id="focusedInput" type="text" name="category_name" required="" >
							  </div>
							</div>


							

							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="category_description" required=""></textarea>
							  </div>
							</div>



                    
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required="">
							  </div>
							</div>






							<div class="form-actions">
					 <button type="submit" class="btn btn-primary">Add Category</button>

							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->


	@endsection
