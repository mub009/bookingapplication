
<form method="post" id="UpdateForm" class="form-horizontal form-bordered">
<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Edit Category</span>
            </div>
        </div>
        <div class="portlet-body form">
        <div class="row">
        <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="Category">Category Name
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['categoryName_en']?>" class="form-control " name="categoryName_english"
                            placeholder="Enter English" autocomplete="off" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['categoryName_ar']?>" class="form-control " name="categoryName_arabic"
                            placeholder="Enter Arabic" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
        <div class="col-md-6">

            <div class="form-group">
                    <center>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                style="width: 200px; height: 150px; line-height: 150px;">
                                <img src="<?=$view['img100x100']?>">
                                </div>
                            <div> 
                            </div>
                        </div>
                    </center>
                </div>
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
                                        accept="image/*" > </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove
                                </a>
                                <br><br>
                                <div class="alert alert-success">
                                    <strong>For Perfect Size 100kb, Width:200px and Height:150px</strong>. </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <center>
		<a href="<?=base_url('store/booking/categories')?>" class="btn dark btn-outline linkVa">Back</a>
		<input type="submit" class="btn green" name='submit' value="Save">
	</center>
    </div>
</div>
<input type="hidden" value="<?=$view["storeServiceCategoriesId"]?>" name="storeServiceCategoriesId">
</form>
<script>
$(document).ready(function () {
    $('#UpdateForm').validate({
		submitHandler: function () {
            AjaxPostDataWithImage("<?=base_url('store/booking/categories/editaction')?>","UpdateForm",false,'<?=base_url('store/booking/categories')?>');        
		}
	});     
});
</script>