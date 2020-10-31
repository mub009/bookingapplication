<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Booking App</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/website/booking/1/')?>css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/website/booking/1/')?>css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/website/booking/1/')?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url('assets/website/booking/1/')?>css/color.css">
    <style>
        <?=$storeDetails['css']?>
    </style>
    <!--=============== favicons ===============-->
    <!--<link rel="shortcut icon" href="images/favicon.ico">-->
</head>

<body>
   <?=$this->load->view('template/webiste/booking/1/loader',$this->data,true)?>
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <header class="main-header">
            <!-- header-top-->
            <?=$this->load->view('template/webiste/booking/1/topHeader',$this->data,true)?>
            <!-- header-top end-->
            <!-- header-inner-->
            <div class="header-inner fl-wrap">
                <div class="container">
                    <?=$this->load->view('template/webiste/booking/1/customerMenu',$this->data,true)?>
                    <div class="home-btn"><a href="<?=base_url()?>"><i class="fas fa-home"></i></a></div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <?=$this->load->view('template/webiste/booking/1/headerMenu',$this->data,true)?>
                    <!-- navigation  end -->

                </div>
            </div>
            <!-- header-inner end-->

        </header>