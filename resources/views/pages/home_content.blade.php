
  @extends('layout')
  @section('content')
  @include('slider')



<h2 class="title text-center">Features Items</h2>
                       
                               <?php

                          foreach ($all_published_product as  $v_published_product) {?>
                        <div class="col-sm-4">

                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
    <img src="{{URL::to($v_published_product->product_image)}}" alt="" style="height: 150px; width: 150px" />
                                        <h2>{{$v_published_product->product_price}} TK</h2>
                                        <p>{{$v_published_product->product_name}}</p>
    <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
    <img src="{{URL::to($v_published_product->product_image)}}" alt="" style="height: 150px; width: 150px" />

                                            <h2>{{$v_published_product->product_price}} TK</h2>
                                        <p>{{$v_published_product->product_name}}</p>
     <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
             <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_published_product->manufacture_name}}</a></li>
 <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>View product</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                         <?php }?>

          <div class="good" style="background:;display:inline; width: 100%;position: ;">
  <a href="#" style="text-align: center;margin: 0 auto;">{{$all_published_product->links()}}</a>
              </div>

          </div>

     

             @yield('content')


                           <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active"> 


               <?php
                $products=DB::table('tbl_products')
                ->where('publication_status',1)
                ->orderBy('product_id','asc')
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
                ->orderBy('product_id','desc')
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
                    
                </div>
            </div>
        </div>
    


        @endsection