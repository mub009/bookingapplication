

<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <div class="portlet-body">
            <div class="row">
            <div class="col-md-3">
                    <div class="mt-widget-1">
                        <div class="mt-img">
                            <a class="linkVa" href="<?=base_url('store/booking/service/addui')?>"><img src="<?=base_url().'assets\admin\assets\pages\img\plus.png'?>"></a> </div>
                    </div>
                </div>

                <?php
foreach ($service as $key => $row) {
    ?>    
                <div class="col-md-3">
                        <div class="mt-widget-1">
                            <div class="mt-icon">
                                <?=($row['is_visible'])?"<span class='label label-sm label-success circle'>show</span>":"<span class='label label-sm label-info circle'>hidden</span>"?>
                            </div>
                            <div class="mt-img">
                                <a><img src="<?=$row['img100x100']?>"> </a></div>
                            <div class="mt-body">
                            <h3 class="mt-username"><?=substr($row['serviceName_en'],0,28)?></h3>
                                <div class="mt-stats">
                                    <div class="btn-group btn-group btn-group-justified">
                                        <a href="<?=base_url('store/booking/service/editform/'.dataEncode($row['storeServicesId']))?>"
                                            class="btn font-yellow linkVa">
                                            <i class="fa fa-pencil"></i> </a>
                                        <a href="<?=base_url('store/booking/service/deleteui/'.dataEncode($row['storeServicesId']))?>"
                                            class="btn font-blue" data-target="#basic" data-toggle="modal">
                                            <i class="fa fa-trash-o"></i> </a>
                                        <a href="<?=base_url('store/booking/service/hideorshowui/'.dataEncode($row['storeServicesId']))?>"
                                            class="btn font-green" data-target="#basic" data-toggle="modal">
                                            <i class="fa fa-tv"></i> </a>
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