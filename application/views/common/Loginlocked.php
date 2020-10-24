
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | User Lock Screen 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/css/lock.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <!-- <a class="brand" href="index.html">
                    <img src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/img/logo-big.png" alt="logo" /> </a> -->
            </div>
            <div class="page-body">
                <div class="lock-head"> Locked </div>
                <div class="lock-body">
                
                <div id="msg"></div>
                    <div class="lock-cont">
                        <div class="lock-item">
                            <div class="pull-left lock-avatar-block">
                                <img src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/media/profile/photo3.jpg" class="lock-avatar"> </div>
                        </div>
                        <div class="lock-item lock-item-full">
                            <form class="lock-form pull-left"  method="post">

                          <input type="hidden" autocomplete="off"  name="country_name" value="<?=$userinfo['CountryId']?>"/> 

                          <input type="hidden" autocomplete="off"  name="MobileNo" value="<?=$userinfo['MobileNo']?>"/> 



                           

                                <h4><?=$userinfo['MobileNo']?></h4>
                                <div class="form-group">
                                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn red uppercase" id="login">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lock-bottom">
                    <a href="<?=base_url().'common/login'?>">Not <?=$userinfo['MobileNo']?>?</a>
                </div>
            </div>
            <div class="page-footer-custom"> 2019 © <?=$config_update['CopyRightBy']?>. Developed By <?=$config_update['Provider_By']?> </div>
        </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/lock.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>



<script>

$(document).ready(function() { 

$('#login').click(function (e) { 
    e.preventDefault();
   
$.ajax({
    type: "POST",
    url: "<?=base_url('common/login/action')?>",
    data: $('.login-form').serialize(),
    dataType: "json",
    success: function (response) {
       

// console.log(response);

  if(response.statusCode==400)
  {
        $('#loginError').remove();       
        $('#msg').append(`<div id="loginError"><div class="alert alert-danger display-show">
                    <button class="close" data-close="alert"></button>`+response.data.msg+`</div></div>`);
  }
  else if(response.statusCode==200)
  {

      
    $.blockUI({ css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
         }}); 
 
        setTimeout($.unblockUI, 2000);

        $('#loginError').remove(); 
        $('#msg').append(`<div id="loginError"><div class="alert alert-green display-show">
                    <button class="close" data-close="alert"></button>Login Successfully</div></div>`); 

   console.log(response.data);

    if(response.data.is_multiuser==true)
    {
           window.location.href = "<?=base_url()?>" + 'common/multiuser';
    }
    else
    {
         window.location.href = "<?=base_url()?>" + response.data.msg;
    }

  }

    }
});

});


  
       
}); 
     

</script>


<!-- End -->
</body>


</html>