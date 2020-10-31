<?php
$locationPage="store/booking/storesettings/location/";
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Location</span>
        </div>
        <div class="actions">
            <a href="<?=base_url($locationPage.'locationaddui')?>" data-toggle="modal" data-target="#basic" class="btn btn-circle btn-icon-only blue">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Location </th>
                        <th> Status </th>
                    </tr>
                </thead>
                <tbody>
<?php
$count=1;
foreach ($locationList as $key => $value) {
?>

                    <tr>
                        <td><?=$count?> </td>
                        <td><?=$value['locationName_en']?>  </td>
                        <td>
                            <div class="btn-group">
                                <a href="<?=base_url($locationPage.'locationeditui/'.dataEncode($value['storeLocationId']))?>" class="btn btn-info" data-toggle="modal" data-target="#basic" >Edit</a>
                                <a href="<?=base_url($locationPage.'locationdeleteui/'.dataEncode($value['storeLocationId']))?>"  class="btn btn-danger" data-toggle="modal" data-target="#basic" >Delete</a>
                                <a href="<?=base_url($locationPage.'locationtimeui/'.dataEncode($value['storeLocationId']))?>"  class="btn btn-warning" >Time</a>
                            </div>
                        </td>
                    </tr>
<?php
$count++;
}
?>

                </tbody>
            </table>
        </div>
    </div>
</div>
