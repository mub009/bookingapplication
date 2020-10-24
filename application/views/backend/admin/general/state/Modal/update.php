<form action="" id="UpdateForm" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Add State</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<div class="form-body">

					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="EmployeeUserName">Country
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							
							
						<select class="form-control" name='countryId' required>
								<option value="">
									<?='Select Country'?>
								</option>
								<?php
foreach ($country as $row) {
    ?>
								<option value="<?=$row['countryId']?>" <?=($view['countryId']==$row['countryId'])?'selected':''?>>
									<?=$row['countryName'] . '(' . $row['countryCode'] . ')'?>
								</option>

								<?php
}
?>

							</select>


						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="StateName">State Name
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="text" require value="<?=$view['stateName']?>" class="form-control" id="StateName" name="StateName"
								placeholder="Enter State Name" autocomplete="off" required>
								<br>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="StateCode">State Code
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="text" value="<?=$view['stateCode']?>" require class="form-control" id="StateCode" name="StateCode"
								placeholder="Enter State Code" autocomplete="off" required>
								<br>
						</div>
					</div>

				</div>
				<!-- END FORM-->
			</div>
		</div>

	</div>
	<div class="modal-footer">
		<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
		<input type="submit"  class="btn green" name='submit' value="Save changes">
	</div>

<input type="hidden" value="<?=$view['stateId']?>"name="stateId"  required>

</form>

<script>
	$('#UpdateForm').validate({

		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/general/state/editaction/'.$view['stateId']?>", "UpdateForm")
		}
	}); // e
</script>