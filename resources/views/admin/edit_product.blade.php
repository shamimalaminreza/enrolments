

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


   <form class="form-horizontal" action="{{url('/update-product',$all_product_info->product_id)}}" method="post" enctype="multipart/form-data">
							        {{csrf_field()}}

						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Product name </label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_name" value="{{$all_product_info->product_name}}" required="">
							  </div>
							</div>


                      <div class="control-group">
								<label class="control-label" for="selectError3">Product category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id" required="">
								  <option>Select Category</option>

                                     <?php
                $Category=DB::table("tbl_category")->where("publication_status",1)->get();
                          foreach ($Category as  $v_category) {?>
				<option 
                    <?php 
            if ($all_product_info->category_id==$v_category->category_id) {?>
               selected="selected";
                 <?php  }?>
				value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
									 <?php }?>
								  </select>
								</div>
							  </div>


                      <div class="control-group">
						<label class="control-label" for="selectError3">Manufacture name</label>
								<div class="controls">
				 <select id="selectError3" name="manufacture_id" required="">
						 <option>Select manufacture</option>


                                  <?php
                $Manufacture=DB::table("tbl_manufacture")->where("publication_status",1)->get();
                   foreach ($Manufacture as  $v_manufacture) {?>
		         <option 
                    <?php 
            if ($all_product_info->manufacture_id==$v_manufacture->manufacture_id) {?>
               selected="selected";
                 <?php  }?>
		value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
                                        <?php }?>
								  </select>
								</div>
							  </div>

						

               <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long description</label>
							  <div class="controls">
	<textarea class="cleditor" id="textarea2" rows="3" name="product_long_description" required="">{{$all_product_info->product_long_description}}</textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Product price </label>
							  <div class="controls">
	<input class="input-xlarge focused" id="focusedInput" type="text" name="product_price" value="{{$all_product_info->product_price}}" required="">
							  </div>
							</div>


              <div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
		<input class="input-file uniform_on" id="fileInput" type="file" name="product_image" 
		value="{{URL::to($all_product_info->product_image)}}" required="">
							  </div>
							</div>

				<div class="form-actions">
				    <button type="submit" class="btn btn-primary">Update product</button>
					<button type="reset" class="btn">Cancel</button>
				</div>



						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->


	@endsection
