
<form action="" id="UpdateForm" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
    <div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Change Dealer Employee Password</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
			<div class="portlet-body form">


			<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="userName">userName</label>
						<div class="col-md-7 ">
						<label class="control-label" style=" text-align:left;" ><?=$view['userName']?></label>
						</div>
					</div>
				</div>


				<!-- BEGIN FORM-->
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="employeePassword">Password
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="password"  require class="form-control" id="newPassword" name="password"
								placeholder="Enter Password" autocomplete="off" required>
						</div>
					</div>
				</div>
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="employeeConfirmPassword">Confirm Password
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="password"  require class="form-control" data-rule-equalTo="#newPassword" name="confirmPassword"
								placeholder="Enter Confirm Password" autocomplete="off" required>
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
	<input type="hidden" name='storeEmployeeId' value="<?=$view['storeEmployeeId']?>">
</form>

<script>
	$('#UpdateForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/store/employee/passwordaction'?>", "UpdateForm")
		}
	});
</script>