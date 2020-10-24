<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Theme List</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet-body">
                <div class="row">
                    <?php
foreach ($themeList as $row) {
?>
                    <div class="col-md-3">
                        <div class="mt-widget-1">
                            <div class="mt-icon">
                            </div>
                            <div class="mt-img">
                                <a><img src="<?=base_url().'assets\admin\assets\pages\img\plus.png'?>"></a> </div>
                            <div class="mt-body">
                                <h3 class="mt-username"><?=$row['Name']?></h3>
                                <h6><?=$row['subTitle']?></h6>
                                <div class="mt-stats">
                                    <div class="btn-group btn-group btn-group-justified">

                                        <?php
                                    if($row['activeThemeId'])
                                    {
?>
                                        Activated
                                        <?php
                                    }else{
?>
                                        <a href="<?=base_url('store/theme/activethemeui/'.dataEncode($row['themeId']))?>"
                                            class="btn font-blue" data-target="#basic" data-toggle="modal">
                                            Active </a>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}
?>

                </div>
            </div>
        </div>
    </div>
</div>