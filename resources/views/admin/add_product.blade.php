

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
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add products</h2>
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


   <form class="form-horizontal" action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
							        {{csrf_field()}}

						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Product name </label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_name" required="">
							  </div>
							</div>


                      <div class="control-group">
								<label class="control-label" for="selectError3">Product category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
									<option>Select category</option>
                                     <?php
                $Category=DB::table('tbl_category')->where('publication_status',1)->get();
                          foreach ($Category as  $v_category) {?>
				<option value="{{$v_category->category_id}}">{{ $v_category->category_name}}</option>
									 <?php }?>
								  </select>
								</div>
							  </div>


                      <div class="control-group">
						<label class="control-label" for="selectError3">Manufacture name</label>
								<div class="controls">
				 <select id="selectError3" name="manufacture_id">
									<option>Select manufacture</option>

                                   <?php
                $Manufacture=DB::table('tbl_manufacture')->where('publication_status',1)->get();
                          foreach ($Manufacture as  $v_manufacture) {?>
		<option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
                                        <?php }?>
									
								  </select>
								</div>
							  </div>

							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product short description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="product_short_description" required=""></textarea>
							  </div>
							</div>

               <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long description</label>
							  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3" name="product_long_description" required=""></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product price </label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_price" required="">
							  </div>
							</div>


              <div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
		<input class="input-file uniform_on" id="fileInput" type="file" name="product_image">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Product size</label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_size" required="">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Product color</label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_color" required="">
							  </div>
							</div>

                    
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required="">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add products</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->


	@endsection
