<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Store Register</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form id="UpdateForm" class="form-horizontal form-bordered" method="post">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Name <span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7">
                                    <input class="form-control" value="<?=$view['storeName']?>" name="storeName" placeholder="Store Name"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Telephone
                                    <span class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7">

                                    <input type="text" value="<?=$view['storeTelephone']?>" class="form-control" name="storeTelephone"
                                        placeholder="Enter Store Telephone" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5 text-left" style=" text-align:left;">Latitude <span
                                        class="required" aria-required="true"> * </span> </label>
                                <div class="col-md-7">
                                    <input class="form-control" value="<?=$view['latitude']?>" name="latitude" placeholder="Latitude"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Longitude <span
                                        class="required" aria-required="true"> * </span> </label>
                                <div class="col-md-7">
                                    <input class="form-control" value="<?=$view['longitude']?>" name="longitude" placeholder="Longitude"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Contact Number 1<span
                                        class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" value="<?=$view['contact1']?>" name="contact1" placeholder="Contact Number 1 "
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Contact Number 2
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" value="<?=$view['contact2']?>" name="contact2" placeholder="Contact Number 2"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Address <span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7 ">
                                    <input type="text" value="<?=$view['storeAddress']?>" class="form-control" name="storeAddress"
                                        placeholder="Store Address" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Country
                                </label>
                                <div class="col-md-7">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">State
                                    <span class="required" aria-required="true"> * </span>
                                </label>
                                <div class="col-md-7 ">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label" style=" text-align:left;">City<span
                                        class="required" aria-required="true"> * </span>
                                </label>
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
                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Area<span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7 ">

                                <select name="areaId" id="areaId" class="form-control" required>
                                <?php
foreach ($area as $row) {
    ?>
                                <option value="<?=$row['areaId']?>"
                                    <?=($row['areaId']==$view['areaId'])?'selected':''?>>
                                    <?=$row['areaName'] . '(' . $row['areaCode'] . ')'?>
                                </option>
                                <?php
}
?>
							</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label" style=" text-align:left;">Store Email</label>
                                <div class="col-md-7">
                                    <input type="text" value="<?=$view['email']?>" class="form-control" name="storeEmail"
                                        placeholder="Enter Store Email" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer center-block">
                    <input type="submit" id="insert" class="btn green center-block" name='submit' value="Save changes">
                </div>
                <input type="hidden" name="storeId" value="<?=$view['storeId']?>">
            </form>
        </div>
    </div>
</div>

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
    $(document).ready(function () {
        $('#UpdateForm').validate({
            rules: {
                employeeUserName: {
                    required: true,
                    remote: "<?=base_url().'admin/store/employee/employee_username_validation'?>"
                }
            },
            messages: {
                employeeUserName: {
                    required: "You must enter a registration name with valid characters.",
                    remote: "{0}  User Name Not Available."
                }
            },
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url().'admin/store/editaction'?>", "UpdateForm",false,"<?=base_url().'admin/store'?>");
            }
        });
    });
</script>