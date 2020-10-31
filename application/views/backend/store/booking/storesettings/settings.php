<?php
$pageName="store/booking/storesettings/";
?>
<div class="row">
    <div class="col-lg-6 col-xs-12 col-sm-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Basic Characteristics </span>
                </div>
            </div>
            <form id="updateForm" method="post" class="form-horizontal form-bordered">
             
                <div class="portlet-body">
                    <div class="form-group">
                        <label class="control-label col-md-4" style=" text-align:left;" for="cost"> Duration</label>
                        <div class="col-md-8 pull-right">
                           <input id="switch" type="checkbox" value="1"
                                    <?=($userInfo['is_duration']?'checked':'')?> class="make-switch" name="is_duration"
                                    data-size="small">
                        
                        </div>
                        
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-group">
                        <label class="control-label col-md-4" style=" text-align:left;"><b>Lock In Time</b></label>
                        <div class="col-md-offset-8">
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-group">
                        <label class="control-label col-md-2" style=" text-align:left;">Minutes</label>
                        <div class="col-md-2">
                        <input type="number" name="minutes" require="" min="0" value="0"
                        class="form-control"
                                 name="hour" placeholder="Enter Lock Minutes"
                                autocomplete="off" required="" aria-invalid="false"></div>

                        <label class="control-label col-md-2" style=" text-align:left;">Hour</label>
                        <div class="col-md-2">
                        <input type="number" name="hour" require="" min="0" value="0"
                                class="form-control" name="hour" placeholder="Enter Lock Hour"
                                autocomplete="off" required="" aria-invalid="false"></div>

                        <label class="control-label col-md-2" style=" text-align:left;">Days</label>
                        <div class="col-md-2"><input type="number" name="days" require="" min="0" value="0"
                                class="form-control" name="hour" placeholder="Enter Lock Days"
                                autocomplete="off" required="" aria-invalid="false"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-8 pull-right"><input type="submit" id="insert" class="btn green" name='submit' value="Save">
                    </div>
                </div>
            </form>
        </div>
        <!-- Location -->
    </div>
</div>
<!-- location close -->

<script>
    $(document).ready(function () {
        //$('.bootstrap-switch-container input').bootstrapSwitch();
        $('#updateForm').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url('store/booking/storesettings/settingsaction')?>","updateForm", false, '<?=base_url('store/booking/storesettings/')?>');
            }
        });
    });
</script>