<form method="post" id="UpdateForm" class="form-horizontal form-bordered">
<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Edit Slider</span>
            </div>
           
        </div>
        <div class="portlet-body form">
            <div class="form-group">
            <div class="col-md-6">
                    <center>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                style="width: 200px; height: 150px; line-height: 150px;">
                                <img src="<?=$slider['sliderImage100x100']?>">
                                </div>
                            <div>
                              
                               
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-6">
                    <center>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                style="width: 200px; height: 150px; line-height: 150px;"></div>
                            <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="hidden" value="" name="..."><input type="file" name="image"
                                        accept="image/*" required> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove
                                </a>
                                <br><br>
                                <div class="alert alert-success">
                                    <strong>For Perfect Size 100kb, Width:1920px and Height:980px</strong>. </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <center>
		<a href="<?=base_url('store/theme/one/slider')?>" class="btn dark btn-outline linkVa">Back</a>
		<input type="submit" class="btn green" name='submit' value="Save">
	</center>
    </div>
</div>
<input type="hidden" value="<?=$slider['storeThemeDetailsId']?>" name="storeThemeDetailsId">
</form>
<script>
$(document).ready(function () {
    $('#UpdateForm').validate({
		submitHandler: function () {
            AjaxPostDataWithImage("<?=base_url('store/theme/one/slidereditraction')?>","UpdateForm",false,'<?=base_url('store/theme/one/slider')?>');        
		}
	}); 
});

</script>
