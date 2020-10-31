
<form action="" id="updateForm" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Edit Location</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
			<div class="portlet-body form">
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-4" style=" text-align:left;" for="locationName">Location Name
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-4">
							<input type="text" require class="form-control" value="<?=$view['locationName_en']?>" name="locationName_en"
								placeholder="In English" autocomplete="off" required >
						</div>
						<div class="col-md-4">
							<input type="text" require class="form-control"  value="<?=$view['locationName_ar']?>" name="locationName_ar"
								placeholder="In Arabic" autocomplete="off" required >
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
		<input type="submit" id="insert" class="btn green" name='submit' value="Save changes">
	</div>
	<input type="hidden" name='storeLocationId' value="<?=dataEncode($view['storeLocationId'])?>">
</form>

<script>
	$('#updateForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url('store/booking/storesettings/location/locationeditaction')?>", "updateForm")
		}
	}); 
</script>