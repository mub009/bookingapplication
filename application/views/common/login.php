
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Markkito</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Markkito  " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index-2.html">
                <img src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="" method="post">


<?php

if($this->session->flashdata('Error'))
{

?>

<input type="hidden" value="<?=$this->agent->referrer();?>"  name="lastUsedUrl" /> 
<?php

}
?>

                <h3 class="form-title font-green">Sign In  <?php echo validation_errors(); ?></h3>

<div id="msg"></div>

<?php
if (!empty($errors)) {

    ?>
                 <div class="alert alert-danger display-show">
                    <button class="close" data-close="alert"></button><?=$errors?>
                    </div>
 <?php
} elseif ($this->session->flashdata('Error')) {
    ?>


                 <div class="alert alert-danger display-show">
                    <button class="close" data-close="alert"></button><?= $this->session->flashdata('Error')?>
                    </div>


    <?php
}
?>
 	<div class="form-group">
						
							<select class="form-control js" name='country_name'>
                            
								<option value="">
									<?='Select Country'?>
								</option>
								<?php

foreach ($country as $row) {
    ?>



								<option value="<?=$row['Id']?>">
									<?=$row['CountryName'] ?>
								</option>

								<?php
}
?>


							</select>

					</div>
        

               <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Mobile No"  name="MobileNo" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase" id="login">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
                    <!-- <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a> -->
                </div>
               
</form>



                   
            
                

            
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <!-- <form class="forget-form" action="http://keenthemes.com/preview/metronic/theme/admin_1/index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form> -->
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->

            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright"> 2019 © <?=$config_update['CopyRightBy']?>. Developed By <?=$config_update['Provider_By']?></div>


        
    
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/login.min.js" type="text/javascript"></script>
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
  
</body>

<script>
$(document).ready(function () {
    $(".js").select2({
  tags: true
});  

});
  
</script>

<script>

function Loader()
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
}

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

      
      Loader();

    if(response.data.is_multiuser==true)
    {
           window.location.href = "<?=base_url()?>" + 'common/multiuser';
    }
    else
    {
         window.location.href = "<?=base_url()?>" + response.data.msg;
    }

  }
  else if(response.statusCode==100)
  {
      
  
                      Loader();
                    window.location.href = response.data.msg;


  }

    }
});

});


  
       
}); 
     

</script>

</html>