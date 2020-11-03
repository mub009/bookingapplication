       <section class="hero-section no-padding" data-scrollax-parent="true" id="sec1">
                        <div class="slider-container-wrap fl-wrap color3-bg">
                            <div class="slider-container">
                                
                                <!-- slideshow-item -->
                                <?php
        foreach($slider as $row)
        {
                                ?>
                                <div class="slider-item fl-wrap">
                                    <div class="hero-parallax">
                                        <div class="bg"  data-bg="<?=$row['imgOG']?>" data-scrollax="properties: { translateY: '200px' }"></div>
                                        <div class="overlay op7"></div>
                                    </div>
                                    <div class="hero-section-wrap fl-wrap">
                                      
                                    </div>
                                </div>
                                <?php
        }
                                ?>
                                <!--  slideshow-item end  -->
                               
                                <!--  slideshow-item end  -->
                            </div>
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                    </section>