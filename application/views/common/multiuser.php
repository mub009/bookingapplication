<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Markkito</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Markkito  " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/font-awesome/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/simple-line-icons/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/css/pricing.min.css" rel="stylesheet" type="text/css" />

    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2-bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/components.min.css" rel="stylesheet"
        id="style_components" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/plugins.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/css/login.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->



<div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Login As </span>
                                </div>
                                <div class="actions">
                                 
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="pricing-content-1">
                                    <div class="row">
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
<?php

if($userDetails)
{

foreach($userDetails as $row)
{

?>

                                        <div class="col-md-3">
                                            <div class="price-column-container border-active">
                                                <div class="price-table-head bg-<?=$row['colour']?>">
                                                    <h2 class="no-margin"><?=$row['UserType']?></h2>
                                                </div>
                                                <div class="arrow-down border-top-<?=$row['colour']?>"></div>
                                                <!-- <div class="price-table-pricing">
                                                    <h3>
                                                        <sup class="price-sign">$</sup>24</h3>
                                                    <p>per month</p>
                                                </div> -->
                                                <div class="price-table-content">
                                                    <!-- <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">3 Total Customer</div>
                                                    </div>

                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-drawer"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">5 Total Product</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-screen-smartphone"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">6 Total Vendor</div>
                                                    </div>
                                                    <div class="row mobile-padding">
                                                        <div class="col-xs-3 text-right mobile-padding">
                                                            <i class="icon-refresh"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-left mobile-padding">2 Total Country Admin</div>
                                                    </div> -->
                                                </div>
                                                <div class="arrow-down arrow-grey"></div>
                                                <div class="price-table-footer">
                                                    <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button" onclick="UserLogin(<?=$row['UserTypeId']?>);">Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
}
else
{
    echo "<center>No User</center>";
}
                                    ?>

                                    </div>
                                </div>
                            </div>
                        </div>
      



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
    <div class="copyright"> 2019 © <?=$config_update['CopyRightBy']?>. Developed By <?=$config_update['Provider_By']?>
    </div>
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->



    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/js/bootstrap.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/js.cookie.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.blockui.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/js/select2.full.min.js"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/scripts/app.min.js" type="text/javascript">
    </script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/components-select2.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/login.min.js" type="text/javascript">
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            $('#clickmewow').click(function () {
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
    






function UserLogin(userTypeId)
{

      $.blockUI({
                            css: {
                                border: 'none',
                                padding: '15px',
                                backgroundColor: '#000',
                                '-webkit-border-radius': '10px',
                                '-moz-border-radius': '10px',
                                opacity: .5,
                                color: '#fff'
                            }
                        });

                        setTimeout($.unblockUI, 2000);


$.ajax({
    type: "POST",
    url: "<?=base_url().'common/multiuser/loginDirection/'?>"+userTypeId,
    data: "data",
    dataType: "json",
    success: function (response) {

        
       

        //console.log(response);
       
         if(response.statusCode==400)
         {  
            
               $('#msg').append(`<div id="loginError"><div class="alert alert-danger display-show">
                           <button class="close" data-close="alert"></button>`+response.data.msg+`</div></div>`);
         }
         else if(response.statusCode==200)
         {
    
            window.location.href = "<?=base_url()?>" + response.data.redirection;

         }
       
    }
});

}

</script>

</html>