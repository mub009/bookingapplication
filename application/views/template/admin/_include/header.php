


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title><?php
if (!empty($title)) {
    echo $title;
}
?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description" />
        <meta content="" name="author" />
        <meta name="viewport" content="user-scalable=no">
      
       <!-- BEGIN PAGE FIRST SCRIPTS -->
       <script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- END PAGE FIRST SCRIPTS -->


  <!-- BEGIN PAGE TOP STYLES -->
  <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE TOP STYLES -->



        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />


        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
      
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />

        <link href="<?=base_url() . 'assets/admin/assets/'?>pages/css/profile.min.css" rel="stylesheet" type="text/css" />
    
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        

 <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />

        <link href="<?=base_url() . 'assets/admin/assets/'?>global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url() . 'assets/admin/assets/'?>layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/jquery.min.js" type="text/javascript"></script>

<link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
       <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />


       
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

       <link href="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
     
       <style>
.error {
      color: red;
   }
</style>

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                        
                    </div>
                   


                    <!-- 'userinfo']['HeaderName'] -->
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>


                   

                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
         
                    <div class="top-menu">
                     <ul class="nav navbar-nav pull-right">

                     

</ul>

                        <ul class="nav navbar-nav pull-right">

                        <li  class="dropdown dropdown-extended dropdown-notification" style="color: azure;">
                          <div class="dropdown-toggle bold">
                       India
                           </div>
</li>

 <li class="dropdown dropdown-extended dropdown-notification" style="color: azure;">
              
 <div class="digital-clock desc">00:00:00</div>
                            </li>


                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"><?php //if(count($notification)){echo count($notification);} ?></i>
                                
                                <span class="badge badge-default"> <?php if(!empty($notification)){echo count($notification);} ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                

                                
                                    <li class="external">
                                        <h3>
                                            <span class="bold">Log</span></h3>
                                        <!-- <a href="page_user_profile_1.html">view all</a> -->
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">

                                            <li>
<?php

if (!empty($notification)) {
    foreach ($notification as $row) {
        ?>
                                                <a href="javascript:;">
                                                    <span class="time"><?=$row['create_date']?> </span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <?=$row['icon']?>
                                                        </span> <?=$row['message']?> </span>
<?php
}
}
?>
</a>

                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                           
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="" />
                                    <span class="username username-hide-on-mobile"> <?=(!empty($userInfo['firstName']))?$userInfo['firstName'].' '.$userInfo['lastName']:$userInfo['userName']?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                    <a href="<?=base_url() . 'admin/profile';?>" class="nav-link">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>

            
                                    <!-- <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li> -->


                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href=<?=base_url() . 'admin/logout'?>>
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li> -->
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>

                        
                      

                    </div>

                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->

            </div>

    





<style>
@font-face {
  font-family: 'DIGITAL';
  src: url('https://cssdeck.com/uploads/resources/fonts/digii/DS-DIGII.TTF');
}



.digital-clock {
    position: relative;
    padding: 10px 15px;
    font-weight: bold;
    font-size: x-large;

}

</style>