<?php
echo $this->load->view('backend/admin/setting/settingMenu','',true);
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Privilege</span>
        </div>
    </div>
    <div class="portlet-body">
     <?php
echo $datatable;
echo $legancy;
     ?>
    </div>
</div>
