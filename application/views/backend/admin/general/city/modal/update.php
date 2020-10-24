<form id="UpdateForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Update City</span>
                </div>
                <div class="actions">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <input type="hidden" class="form-control" name="id" id="edit_city_id">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">Country Name</label>
                        <div class="col-md-7 ">
                            <select class="form-control" required name='countryId' onchange="stateData(this.value)">
                                <option value="">
                                    <?='Select Country'?>
                                </option>
                                <?php
foreach ($country as $row) {
    ?>

                                <option value="<?=$row['countryId']?>"
                                    <?=($view['countryId']==$row['countryId'])?'selected':''?>>
                                    <?=$row['countryName'] . '(' . $row['countryCode'] . ')'?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">State Name</label>
                        <div class="col-md-7">
                            <select name="StateId" required class="form-control" id="state_list" name="state">
                                <option>Select State</option>
                                <?php
foreach ($state as $row) {
    ?>
                                <option value="<?=$row['stateId']?>"
                                    <?=($view['stateId']==$row['stateId'])?'selected':''?>>
                                    <?=$row['stateName'] . '(' . $row['stateCode'] . ')'?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-5" style=" text-align:left;">City Name</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" required value="<?=$view['cityName']?>"
                                name="CityName" placeholder="Enter City Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group" id="validation_city_code_update">
                        <label class="control-label col-md-5" style=" text-align:left;">City Code</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" required value="<?=$view['cityCode']?>"
                                name="CityCode" placeholder="Enter City Code" autocomplete="off"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <input type="submit" id="update" class="btn btn-danger" name='update' value="Save changes">
    </div>
    <input type="hidden" name='cityId' value="<?=$view['cityId']?>">
</form>

<script>
    function stateData(countryId) {
        $.ajax({
            type: "get",
            url: "<?=base_url().'common'.'/getstatelist'?>",
            data: "countryId=" + countryId,
            dataType: "html",
            success: function (response) {
                $('#state_list').html(response);
            }
        });
    }
    $('#UpdateForm').validate({
        submitHandler: function () {
            modalBasicAjaxPostData("<?=base_url().'admin/general/city/editaction'?>", "UpdateForm");
        }
    });
</script>