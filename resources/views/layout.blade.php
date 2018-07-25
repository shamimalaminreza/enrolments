<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php
    $title='Home';

     echo $title;

     ?></title>


     
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->




<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>01937391800</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>sreza965@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">


                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://www.google-plus.com/"><i class="fa fa-google-plus"></i></a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">


         
<a href="{{URL::to('/')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt=""  style="height: 90px;width:120px;margin-top: -20px"/></a>



                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
           <?php  $customer_id=Session::get('customer_id'); ?>  
                 <?php
             //

             if ($customer_id!==NULL){?>
            <li><a href="{{URL::to('/Wishlist')}}"><i class="fa fa-star"></i> Wishlist</a></li>
             <?php }?>


             <?php  if ($customer_id!==NULL){?>
     <li><a href="{{URL::to('/Compayer')}}"><i class="fa fa-star"></i>Compayer</a></li>
            <?php }?>           

<?php  if ($customer_id!==NULL){?>
     <li><a href="{{URL::to('/Profile')}}"><i class="fa fa-star"></i>Profile</a></li>
            <?php }?>           


                    <?php 
                     //makng l0gn l0g0t..
                    $customer_id=Session::get('customer_id'); 
                    $shipping_id=Session::get('shipping_id'); 

                    ?>

                   <?php 
                      if ($customer_id!==NULL && $shipping_id==NULL) {?>
        <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                  <?php }if($customer_id!==NULL && $shipping_id!==NULL){?>
        <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>payment</a></li>
                     <?php  }else{?>
    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Login Check</a></li>
       <?php }?>


                  

                      <?php 
                      if ($customer_id!==NULL) {?>
              <li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
                   
                     <?php  }?>
         
     
                    <?php 
                    $customer_id=Session::get('customer_id');?>
                   <?php 
                      if ($customer_id!==NULL) {?>
                        <li><a href="{{URL::to('/customer-logout')}}">Logout</a></li>

                      <?php }else{?>

                        <li><a href="{{URL::to('/login-checkout')}}">Login</a></li>

                     <?php  }?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                                <li class="dropdown"><a href="{{URL::to('/')}}">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

                    <?php 
                     //makng l0gn l0g0t..
                    $customer_id=Session::get('customer_id'); 
                    $shipping_id=Session::get('shipping_id'); 


                    ?>
                  
                   <?php 
                      if ($customer_id!==NULL && $shipping_id==NULL) {?>
        <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                  <?php }if($customer_id!==NULL && $shipping_id!==NULL){?>
        <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Checkout</a></li>
                     <?php  }else{?>
        <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Checkout</a></li>
       <?php }?>


                                      <?php 

                                       if ($customer_id!==NULL){?>
                                        <li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
                                            <?php }   ?>
                                    </ul>
                                </li> 
                                    

                                <li><a href="{{URL::to('/contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header><!--/header-->
    



    <!--<section id="slider">
        <div class="container">
            <div class="row">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    Wrapper for slides 

    <div class="carousel-inner">

      <div class="item active">
<img src="Slider/dwY1jrPbjsLKrKVg6Eh8.jpg"  style="width:100%; margin-left: -50px; height: 400px">
      </div>

<div class="item">
        <img src="Slider/pn5zZ4kJLSIEvDrdSBRW.jpg" alt="Chicago" style="width:100%;margin-left: -50px;height: 400px">
      </div>
     <div class="item">
        <img src="Slider/zArE6a83IJYetxrP4Mgl.jpg" alt="New york" style="width:100%;margin-left: -50px;height: 400px">
      </div>

    </div>



     Left and right controls 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
    </section>-->
    
@yield('slider');


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                         <?php 

                            $data=DB::table('tbl_category')->get();

                          ?>
                        <h2>Category(<?php echo count($data); ?>)</h2>

                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <?php
                $Category=DB::table('tbl_category')->where('publication_status',1)->get();

                          foreach ($Category as  $v_category) {?>
                         


                            <div class="panel panel-default">
                                <div class="panel-heading" style="border-bottom-style: 6px dotted;">
           <h4 class="panel-title" ><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                            </div>

                            <?php }?>


                            </div>
                        </div><!--/category-products-->


                    
                        <div class="brands_products"><!--brands_products-->
                            <?php 

                            $data=DB::table('tbl_manufacture')->get();

                          ?>



                            <h2>Manufacture(<?php echo count($data); ?>)</h2>
                            <div class="brands-name">

                                   <?php
                $Manufacture=DB::table('tbl_manufacture')->where('publication_status',1)->get();

                          foreach ($Manufacture as  $v_manufacture) {?>
                         

                                <ul class="nav nav-pills nav-stacked">
    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}""> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                                </ul>
                                  <?php }?>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                       

             @yield('content')


                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                <img src="{{URL::to('frontend/images/home/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/iframe2.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="" alt="" />
<iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29243.84841899401!2d91.0828397980364!3d23.622937437302834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754710380538e77%3A0x964859b4bd780e5b!2z4Kas4KeN4Kaw4Ka-4Ka54KeN4Kau4KajIOCmquCmvuCnnOCmvg!5e0!3m2!1sbn!2sbd!4v1485094978384" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </iframe>




                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 . All rights reserved</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.facebook.com">Shamim reza</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>













