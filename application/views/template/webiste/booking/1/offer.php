<section class="grey-blue-bg">
                        <!-- container-->
                        <div class="container">
                            <div class="section-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2>Offers</h2>
                                <span class="section-separator"></span>
                              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>-->
                            </div>
                        </div>
                        <!-- container end-->
                        <!-- carousel -->
                        <div class="list-carousel fl-wrap card-listing ">
                            <!--listing-carousel-->
                            <div class="listing-carousel  fl-wrap ">


                            <?php
foreach ($offer as $key => $row) {

                            ?>
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <a href=""><img src="<?=$row['imgOG']?>" alt=""></a>
                                                <div class="listing-avatar"><a href=""><img src="<?=$storeDetails['imgOG']?>" alt=""></a>
                                                   
                                                </div>
                                                <div class="sale-window"><?=$row['categoryName_en']?></div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating card-popup-rainingvis"><strong style="color: #fff;"><?=$row['offerTitle_en']?></strong></div><br>
                                                    <div class="listing-rating card-popup-rainingvis"><strong style="color: #fff;font-size: 21px;">200</strong></div> 
                                                    <div class="rate-class-name">
                                                        <a href="#"><span>BOOK NOW</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                        
                             <?php
                                 # code...
}
                             ?>
                                <!--slick-slide-item-->
                             
                         
                            

                                
                                
                                
                            </div>
                            <!--listing-carousel end-->
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                        <!--  carousel end-->
                    </section>