<?php
$pageName="admin/setting/";
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Settings Menus</span>
        </div>
    </div>
    <div class="portlet-body">
        <a href="<?=base_url() . $pageName.'privilege';?>" class="icon-btn linkVa" >
            <i class="fa fa-group"></i>
            <div> Privilege </div>
        </a>
        <a href="<?=base_url() . $pageName.'contact';?>" class="icon-btn linkVa">
            <i class="fa fa-envelope"></i>
            <div> Contact </div>
        </a>
        <a href="<?=base_url() . $pageName.'contact';?>" class="icon-btn linkVa">
            <i class="fa fa-envelope"></i>
            <div> Privacy & Policy </div>
        </a>
        <a href="<?=base_url() . $pageName.'contact';?>" class="icon-btn linkVa">
            <i class="fa fa-envelope"></i>
            <div> PaymentGateway </div>
        </a>
    </div>
</div>