<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <div class="portlet-body">
            <div class="row">
            <div class="col-md-3">
                    <!--begin: widget 1-2 -->
                    <div class="mt-widget-1">
                        <div class="mt-img">
                            <a class="linkVa" href="<?=base_url('store/theme/one/featuresform')?>"><img src="<?=base_url().'assets\admin\assets\pages\img\plus.png'?>"></a> </div>
                    </div>
                    <!--end: widget 1-2 -->
                </div>

                <?php
foreach ($feature as $key => $row) {
    $jsonDecode=array();
    $jsonDecode=json_decode($row['json']);
    ?>    
                <div class="col-md-3">
                    <!--begin: widget 1-1 -->
                    <div class="mt-widget-1">
                        <div class="mt-icon">
                        <?=($row['is_visible'])?"<span class='label label-sm label-success circle'>show</span>":"<span class='label label-sm label-info circle'>hidden</span>"?>
                        </div>
                        <div class="mt-img">
                            <a><img src="<?=$row['sliderImage100x100']?>"></a> </div>
                        <div class="mt-body">
                            <h3 class="mt-username"><?=substr($jsonDecode->heading,0,28)?></h3>
                            <div class="mt-stats">
                            <div class="btn-group btn-group btn-group-justified">
                                    <a href="<?=base_url('store/theme/one/featuresedit/'.$row['storeThemeDetailsId'])?>" class="btn font-yellow">
                                        <i class="fa fa-pencil"></i> </a>
                                    <a href="<?=base_url('store/theme/one/modaldeleteitem/features/'.$row['storeThemeDetailsId'])?>" class="btn font-blue"  data-target="#basic" data-toggle="modal">
                                        <i class="fa fa-trash-o"></i> </a>
                                    <a  href="<?=base_url('store/theme/one/modalvisibilititem/features/'.(($row['is_visible'])?0:1).'/'.$row['storeThemeDetailsId'])?>" class="btn font-green" data-target="#basic" data-toggle="modal">
                                        <i class="fa fa-tv"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: widget 1-1 -->
                </div>
                <?php
}

?>
              
                
            </div>
        </div>
    </div>
</div>
