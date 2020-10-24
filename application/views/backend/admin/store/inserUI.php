<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Store Register</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form id="InsertForm" class="form-horizontal form-bordered" method="post">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Name <span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7">
                                    <input class="form-control" name="storeName" placeholder="Store Name"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Telephone
                                    <span class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7">

                                    <input type="text" class="form-control" name="storeTelephone"
                                        placeholder="Enter Store Telephone" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5 text-left" style=" text-align:left;">Latitude <span
                                        class="required" aria-required="true"> * </span> </label>
                                <div class="col-md-7">
                                    <input class="form-control" name="latitude" placeholder="Latitude"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Longitude <span
                                        class="required" aria-required="true"> * </span> </label>
                                <div class="col-md-7">
                                    <input class="form-control" name="longitude" placeholder="Longitude"
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
                                    <input class="form-control" name="contact1" placeholder="Contact Number 1 "
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Contact Number 2
                                </label>
                                <div class="col-md-7">
                                    <input class="form-control" name="contact2" placeholder="Contact Number 2"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Store Address <span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7 ">
                                    <input type="text" class="form-control" name="storeAddress"
                                        placeholder="Store Address" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Country
                                </label>
                                <div class="col-md-7">
                                    <select class="form-control"  name='countryId'
                                        onChange="stateData(this.value);" required>
                                        <option value="">
                                            <?='Select Country'?>
                                        </option>
                                        <?php
foreach ($country as $row) {
    ?>
                                        <option value="<?=$row['countryId']?>">
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
                                    <select name="stateId" class="form-control"  id="stateId"
                                        onChange="cityData(this.value);" name="state" required>
                                        <option value="">Select State</option>
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
                                    <select name="cityId" onChange="areaData(this.value);" id="cityId" class="form-control" required>
                                        <option value="">Select City</option>
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
								<option value="">Select Area</option>
							</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label" style=" text-align:left;">Store Email</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="storeEmail"
                                        placeholder="Enter Store Email" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;"><u>Employee
                                        Details</u></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">UserName<span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7 ">
                                    <input type="text" class="form-control" name="employeeUserName"
                                        placeholder="Enter User Name" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-5" style=" text-align:left;">Password <span
                                        class="required" aria-required="true"> * </span></label>
                                <div class="col-md-7 ">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter Password" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label" style=" text-align:left;">Employee Email</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="employeeEmail"
                                        placeholder="Employee Email" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer center-block">
                    <input type="submit" id="insert" class="btn green center-block" name='submit' value="Save changes">
                </div>
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

    function areaData(cityId) {
        $.ajax({
            type: "get",
            url: "<?=base_url().'common'.'/getarealist'?>",
            data: "cityId=" + cityId,
            dataType: "html",
            success: function (response) {
                $('#areaId').html(response);
            }
        });
    }
    $(document).ready(function () {
        $('#InsertForm').validate({
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
                modalBasicAjaxPostData("<?=base_url().'admin/store/post_store'?>", "InsertForm",false,"<?=base_url().'admin/store'?>");
            }
        });
    });
</script>