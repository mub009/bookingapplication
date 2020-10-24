<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Slider</span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet-body">
                <div class="row">

                    <div class="col-md-3">
                        <!--begin: widget 1-2 -->
                        <div class="mt-widget-1">
                            <div class="mt-img">
                                <a href="<?=base_url('store/theme/one/sliderform')?>" class="linkVa"><img
                                        src="<?=base_url().'assets\admin\assets\pages\img\plus.png'?>"></a> </div>
                        </div>
                        <!--end: widget 1-2 -->
                    </div>

                    <?php
foreach ($slider as $key => $row) {
    ?>
                    <div class="col-md-3">
                        <!--begin: widget 1-2 -->
                        <div class="mt-widget-1">
                            <div class="mt-icon">
                                <?=($row['is_visible'])?"<span class='label label-sm label-success circle'>show</span>":"<span class='label label-sm label-info circle'>hidden</span>"?>
                            </div>
                            <div class="mt-img">
                                <a><img src="<?=$row['sliderImage100x100']?>"> </a></div>
                            <div class="mt-body">
                                <div class="mt-stats">
                                    <div class="btn-group btn-group btn-group-justified">
                                        <a href="<?=base_url('store/theme/one/slideredit/'.$row['storeThemeDetailsId'])?>"
                                            class="btn font-yellow linkVa">
                                            <i class="fa fa-pencil"></i> </a>
                                        <a href="<?=base_url('store/theme/one/modaldeleteitem/slider/'.$row['storeThemeDetailsId'])?>"
                                            class="btn font-blue" data-target="#basic" data-toggle="modal">
                                            <i class="fa fa-trash-o"></i> </a>
                                        <a href="<?=base_url('store/theme/one/modalvisibilititem/slider/'.(($row['is_visible'])?0:1).'/'.$row['storeThemeDetailsId'])?>"
                                            class="btn font-green" data-target="#basic" data-toggle="modal">
                                            <i class="fa fa-tv"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: widget 1-2 -->
                    </div>
                    <?php
}

?>


                </div>
            </div>
        </div>
    </div>
</div>

