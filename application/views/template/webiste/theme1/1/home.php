    <!-- REVOLUTION SLIDER -->

 <?php
  if(!empty($slider))
  {
 ?>   
    <div id="rev_slider_27_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fizo-slider-4" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_27_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
 <?php

 foreach ($slider as $key => $row) {
 ?>
 
                <li data-index="rs-32" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="<?=$row['image']?>" alt=""  class="rev-slidebg">
                </li>
 <?php
 }
 ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
  <?php
  }
  ?>
  
    <!-- END REVOLUTION SLIDER -->
<?php
if(!empty($features))
{
?>

    <section class="padding-bottom-120px">
        <div class="container">
            <div class="row">

<?php

foreach ($features as $key => $row) {
    $jsonDecode=array();
    $jsonDecode=json_decode($row['json']);
    ?>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="fizo-icon-box layout-4">
                        <div class="icon"><img src="<?=$row['image']?>" alt=""></div>
                        <h3><a href="#"><?=$jsonDecode->heading?></a></h3>
                    </div>
                </div>
    <?php
}
?>





            </div>
        </div>
    </section>

<?php
}
if(!empty($service))
{
?>

    <section class="padding-top-0px padding-bottom-120px">
        <div class="container">
            <div class="row">


            <?php
foreach ($service as $key => $row) {
    $jsonDecode=array();
    $jsonDecode=json_decode($row['json']);
    ?>
     <!-- Item -->
     <div class="col-lg-4 col-md-6">
                    <div class="fizo-icon-box layout-3">
                        <div class="icon">
                            <img src="<?=$row['image']?>" alt="image">
                        </div>
                        <h3><a href="#" class="link"><?=$jsonDecode->heading?></a></h3>
                        <div class="text"><?=$jsonDecode->details?></div>
                    </div>
    </div>
                <!-- END Item -->

    <?php
}
            ?>
            </div>
        </div>
    </section>
<?php
}
if(!empty($whychooseus))
{
 $jsonWhyChooiseDecode=json_decode($whychooseus[0]['json']);
?>
    <section class="padding-top-0px padding-bottom-120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="margin-bottom-80px">
                        <div class="nile-title layout-1 text-left">
                            <div class="sub-title"><?=$jsonWhyChooiseDecode->subHeading?></div>
                            <h2><?=$jsonWhyChooiseDecode->heading?></h2>
                        </div>
                    </div>

<?php
if(!empty($whychooseuslist))
{
foreach ($whychooseuslist as $key => $row) {
    $jsonDecode=array();
    $jsonDecode=json_decode($row['json']);
?>
                    <!-- icon & text -->
                    <div class="fizo-icon-box layout-1 margin-bottom-45px">
                        <div class="icon"><img src="<?=$row['image']?>" alt=""></div>
                        <div class="content">
                            <h3><?=$jsonDecode->heading?></h3>
                            <p><?=$jsonDecode->details?>.</p>
                        </div>
                    </div>
                    <!-- // icon & text -->
<?php
}
}
?>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img src="<?=$whychooseus[0]['image']?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php
}
    ?>


<?php
if(!empty($testimonial))
{
?>

    <section class="padding-bottom-120px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-slider-2 dark owl-carousel owl-theme">
                        <?php
                        foreach ($testimonial as $key => $row) {
                            $jsonDecode=array();
                            $jsonDecode=json_decode($row['json']);
                         ?>
                          <div class="fizo-testimonial layout-3">
                            <div class="img-in"><img src="<?=$row['image']?>" alt=""></div>
                            <div class="content"><?=$jsonDecode->content?> </div>
                            <h4 class="name"><?=$jsonDecode->name?></h4>
                        </div>

                      <?php
                        }
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
if(!empty($contact))
{
$contactJson=json_decode($contact[0]['json']);
?>

    <section class="padding-bottom-50px">
        <div class="container">
            <!-- Title -->
            <div class="nile-title layout-1   text-center">
                <h2>Contact Us</h2>
            </div>
            <div class="map-layout margin-bottom-75px">
                <iframe src="<?=$contactJson->map?>" style="border:0" allowfullscreen></iframe>
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <div class="fizo-icon-box layout-2">
                        <div class="icon"><img src="<?=base_url('assets/website/theme1/')?>assets/icons/map-location.svg" alt=" "></div>
                        <h3><?=$contactJson->location?></h3>
                        <div class="dis"><?=$contactJson->locationAddress?></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fizo-icon-box layout-2">
                        <div class="icon"><img src="<?=base_url('assets/website/theme1/')?>assets/icons/www.svg" alt=" "></div>
                        <h3><?=$contactJson->site?></h3>
                       
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fizo-icon-box layout-2">
                        <div class="icon"><img src="<?=base_url('assets/website/theme1/')?>assets/icons/24-hours.svg" alt=" "></div>
                        <h3><?=$contactJson->phone?></h3>
            
                    </div>
                </div>

            </div>

        </div>
    </section>

    <?php
}
    ?>