<?php
$address=$storeDetails['email']!='' or $storeDetails['storeAddress']!='' or  $storeDetails['contact1']!='' or $storeDetails['contact2']!='';
$social=$storeDetails['socialMediaFacebookId']!='' or $storeDetails['socialMediaTwitterId']!='' or $storeDetails['socialMediaInstagramId']!='' or $storeDetails['socialMediaSnapChatId']!='';
if($address or $social or $storeDetails['storeAbout'])
{
?>
       
       <!--footer -->
            <footer class="main-footer">
                <!--subscribe-wrap-->
            
                <!--subscribe-wrap end -->
                <!--footer-inner-->
                <div class="footer-inner">
                    <div class="container">
                        <!--footer-fw-widget-->
                    
                        <!--footer-fw-widget end-->
                        <div class="row">
                            <!--footer-widget -->
                            <div class="col-md-4">
                            <?php
                            if($storeDetails['storeAbout'])
                            {
                            ?>
                                <div class="footer-widget fl-wrap">
                                    <h3>About Us</h3>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p><?=$storeDetails['storeAbout']?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </div>
                            <div class="col-md-4">
                            <?php
                            if($storeDetails['socialMediaFacebookId']!='' or $storeDetails['socialMediaTwitterId']!='' or $storeDetails['socialMediaInstagramId']!='' or $storeDetails['socialMediaSnapChatId']!='')
                            {
                            ?>
                                <div class="footer-widget fl-wrap">
                                        <div class="footer-social">
                                            <span>Find us : </span>
                                            <ul>
                                            <?php
                                            if($storeDetails['socialMediaFacebookId']){
                                            ?>
                                                <li><a href="https://facebook.com/<?=$storeDetails['socialMediaFacebookId']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <?php } 
                                            if($storeDetails['socialMediaTwitterId']){
                                            ?>   
                                                <li><a href="https://twitter.com/<?=$storeDetails['socialMediaTwitterId']?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                              <?php
                                            }
                                            if($storeDetails['socialMediaInstagramId']){
                                              ?>
                                                <li><a href="https://instagram.com/<?=$storeDetails['socialMediaInstagramId']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                               <?php
                                            }if($storeDetails['socialMediaSnapChatId']){
                                               ?>
                                                <li><a href="www.snapchat.com/<?=$storeDetails['socialMediaSnapChatId']?>" target="_blank"><i class="fab fa-snapchat"></i></a></li>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                </div>
                                <?php
                            }
                                ?>
                            </div>
                            <div class="col-md-4">
                            <?php
                            if($storeDetails['email']!='' or $storeDetails['storeAddress']!='' or  $storeDetails['contact1']!='' or $storeDetails['contact2']!='')
                            {
                            ?>
                            <ul  class="footer-contacts fl-wrap">
                                         <?php
                                        if($storeDetails['email'])
                                        {
                                         ?>
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank"><?=$storeDetails['email']?></a></li>
                                            <?php
                                        }
                                        if($storeDetails['storeAddress'])
                                        {
                                         ?>
                                            <li> <span><i class="fal fa-map-marker-alt"></i> Adress :</span><a href="#" target="_blank"><?=$storeDetails['storeAddress']?></a></li>
                                            <?php
                                        }
                                        if($storeDetails['contact1'])
                                        {
                                         ?>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#"><?=$storeDetails['contact1']?></a></li>
                                        <?php
                                        }
                                        if($storeDetails['contact2'])
                                        {
                                        ?>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#"><?=$storeDetails['contact2']?></a></li>
                                        <?php
                                        }
                                        ?>
                                        </ul>
                                        <?php
                            }
                                        ?>
                                </div>
                            <!--footer-widget end-->
                            <!--footer-widget -->
                         
                            <!--footer-widget end-->
                            <!--footer-widget -->
                           
                            <!--footer-widget end-->
                        </div>
                        <div class="clearfix"></div>
                        <!--footer-widget -->
                       
                        <!--footer-widget end -->
                    </div>
                </div>
                <!--footer-inner end -->
                <div class="footer-bg">
                </div>
                <!--sub-footer-->
              
                <!--sub-footer end -->
            </footer>
<?php
}
?>

            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn color-bg"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn color-bg"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="<?=base_url('assets/website/booking/1/')?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('assets/website/booking/1/')?>js/plugins.js"></script>
        <script>
        var url="<?=base_url()?>";
        var storeId="<?=dataEncode($storeDetails['storeId'])?>";
        </script>
        <script type="text/javascript" src="<?=base_url('assets/website/booking/1/')?>js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
        <script type="text/javascript" src="<?=base_url('assets/website/booking/1/')?>js/map-single.js"></script>
    </body>
</html>