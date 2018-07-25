





<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>

                        </ol>
                    
                        <div class="carousel-inner">
                               <?php
                $Slider=DB::table('tbl_slider')->where('publication_status',1)->get();
                           $i=1;
                          foreach ($Slider as  $v_slider) {

                                    if ($i==1){

                                   $i++; 
                            ?>
                            <div class="item active">
                                <?php }else{?>
                            <div class="item">
                               <?php }?>

                                <div class="col-sm-12">
                    <img src="{{URL::to($v_slider->slider_image)}}" class="girl img-responsive" alt="" style="width:890px; margin-left: -50px; height:400px;"/>
                                </div>
                            </div>

                             <?php }?>



                         </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section><!--/slider-->
