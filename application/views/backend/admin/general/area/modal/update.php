<form action="" id="UpdateForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Update Area</span>
                </div>
                <div class="actions">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">Country</label>
                        <div class="col-md-7 ">
                            <select class="form-control" name='countryId' onChange="stateData(this.value);">
                                <option value="">
                                    <?='Select Country'?>
                                </option>
                                <?php
foreach ($country as $row) {
    ?>
                                <option value="<?=$row['countryId']?>"
                                    <?=($row['countryId']==$view['countryId'])?'selected':''?>>
                                    <?=$row['countryName'] . '(' . $row['countryCode'] . ')'?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">State</label>
                        <div class="col-md-7">
                            <select name="stateId" id="stateId" class="form-control" onChange="cityData(this.value);">
                                <option>Select State</option>
                                <?php
foreach ($state as $row) {
    ?>
                                <option value="<?=$row['stateId']?>"
                                    <?=($row['stateId']==$view['stateId'])?'selected':''?>>
                                    <?=$row['stateName'] . '(' . $row['stateCode'] . ')'?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">City</label>
                        <div class="col-md-7">
                            <select name="cityId" id="cityId" class="form-control">
                                <option>Select City</option>
                                <?php
foreach ($city as $row) {
    ?>
                                <option value="<?=$row['cityId']?>"
                                    <?=($row['cityId']==$view['cityId'])?'selected':''?>>
                                    <?=$row['cityName'] . '(' . $row['cityCode'] . ')'?>
                                </option>
                                <?php
}
?>
                            </select> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">Area Name</label>
                        <div class="col-md-7">

                            <input type="text" class="form-control" name="areaName" placeholder="Enter Area Name"
                                value="<?=$view['areaName']?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">Area Code</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="areaCode" placeholder="Enter Area Code"
                                value="<?=$view['areaCode']?>" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <input type="submit" id="update" class="btn green" name='update' value="Save changes">
    </div>
    <input type="hidden" name='areaId' value="<?=$view['areaId']?>">
</form>
<script>
    function stateData(countryId) {
        $.ajax({
            type: "get",
            url: "<?=base_url().'common'.'/getstatelist'?>",
            data: "countryId=" + countryId,
            dataType: "html",
            success: function (response) {
                $('#stateId').html(response);
            }
        });
    }

    function cityData(stateId) {
        $.ajax({
            type: "get",
            url: "<?=base_url().'common'.'/getcitylist'?>",
            data: "stateId=" + stateId,
            dataType: "html",
            success: function (response) {
                $('#cityId').html(response);
            }
        });
    }

    $('#UpdateForm').validate({
        submitHandler: function () {
            modalBasicAjaxPostData("<?=base_url().'admin/general/area/editaction'?>", "UpdateForm");
        }
    });
</script>