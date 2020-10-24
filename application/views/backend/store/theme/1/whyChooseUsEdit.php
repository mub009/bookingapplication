<?php
$json=json_decode($whychooseus['json']);

?>
<form method="post" id="UpdateForm" class="form-horizontal form-bordered">
<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Edit Why Choose Us</span>
            </div>

        </div>
        <div class="portlet-body form">
        <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                    <center>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                style="width: 200px; height: 150px; line-height: 150px;">
                                <img src="<?=$whychooseus['sliderImage100x100']?>">
                                </div>
                            <div> 
                            </div>
                        </div>
                    </center>
                </div>
            </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-5" style=" text-align:left;" for="Heading">Heading
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-7 ">
                        <input type="text" require="" class="form-control error" value="<?=$json->heading?>" name="json[heading]"
                            placeholder="Enter Heading" autocomplete="off" required="" aria-invalid="false"><br>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="control-label col-md-5" style=" text-align:left;" for="Heading">Sub Heading
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-7 ">
                        <input type="text" require="" class="form-control error" value="<?=$json->subHeading?>"  name="json[subHeading]"
                            placeholder="Enter Heading" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                    <center>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                style="width: 200px; height: 150px; line-height: 150px;"></div>
                            <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="hidden" value="" name="..."><input type="file" name="image"
                                        accept="image/*" > </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove
                                </a>
                                <br><br>
                                <div class="alert alert-success">
                                    <strong>For Perfect Size 100kb, Width:700px and Height:700px</strong>. </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <center>
		<a href="<?=base_url('store/theme/one/whychooseus')?>" class="btn dark btn-outline linkVa">Back</a>
		<input type="submit" class="btn green" name='submit' value="Save">
	</center>
    </div>
</div>
<input type="hidden" value="<?=$whychooseus['storeThemeDetailsId']?>" name="storeThemeDetailsId">
</form>
<script>
$(document).ready(function () {
    $('#UpdateForm').validate({
		submitHandler: function () {
            AjaxPostDataWithImage("<?=base_url('store/theme/one/whychooseuseditraction')?>","UpdateForm",false,'<?=base_url('store/theme/one/whychooseus')?>');        
		}
	});     
});

</script>