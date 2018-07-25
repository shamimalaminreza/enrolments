
  @extends('layout')
  @section('content')

<h2 class="title text-center">Features Items</h2>
                       
                               <?php

                          foreach ($product_by_category as  $v_category_product) {?>
                        <div class="col-sm-4">

                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
    <img src="{{URL::to($v_category_product->product_image)}}" alt="" style="height: 150px; width: 150px" />
                                        <h2>{{$v_category_product->product_price}} TK</h2>
                                        <p>{{$v_category_product->product_name}}</p>
                                        <a href="{{URL::to('/view_product/'.$v_category_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
    <img src="{{URL::to($v_category_product->product_image)}}" alt="" style="height: 150px; width: 150px" />

                                            <h2>{{$v_category_product->product_price}} TK</h2>
                                        <p>{{$v_category_product->product_name}}</p>
                                            <a href="{{URL::to('/view_product/'.$v_category_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                         <li><a href="#"><i class="fa fa-plus-square" style=" "></i>Add to list</a></li>



                <li><a href="#"><i class="fa fa-plus-square"></i>View product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <?php }?>


                    </div><!--features_items-->





                           <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active"> 


               <?php
                $products=DB::table('tbl_products')
                ->where('publication_status',1)
                ->orderBy('product_id','acs')
                ->limit(3)
                ->get();
                ?>
                            <?php
                    foreach ($products as  $v_products) {?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
     <img src="{{URL::to($v_products->product_image)}}" alt="" style="height: 150px; width: 100px"/>
                                     <h2>{{$v_products->product_name}}</h2>
                                    <p>{{$v_products->product_price}} TK</p>
     <a href="{{URL::to('/view_product/'.$v_products->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                 <?php }?>



                                </div>



                                <div class="item">  


               <?php
                $products1=DB::table('tbl_products')
                ->where('publication_status',1)
                ->orderBy('product_id')
                ->limit(3)
                ->get();
                ?>

                            <?php
                    foreach ($products1 as  $v_products) {?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
     <img src="{{URL::to($v_products->product_image)}}" alt="" style="height: 150px; width: 100px"/>
                                     <h2>{{$v_products->product_name}}</h2>
                                    <p>{{$v_products->product_price}} TK</p>
 <a href="{{URL::to('/view_product/'.$v_products->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                <?php }?>




                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
                    </div><!--/recommended_items-->
                    

    

        @endsection