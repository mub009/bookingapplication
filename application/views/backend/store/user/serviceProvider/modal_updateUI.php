
<form action="" id="UpdateForm" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Update Store Employee</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<div class="form-body">
					
				
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="employeeEmail">Email
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="email" require class="form-control" id="employeeEmail" value="<?=$view['email']?>" name="employeeEmail"
								placeholder="Enter Employee Email" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="PrivilegeMode">Privilege
							Mode <span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7">

							<label class="mt-radio mt-radio-outline">
								<input type="radio" name="PrivilegeMode" value="group" required>Group
								<span></span>
							</label>
							<label class="mt-radio mt-radio-outline">
								<input type="radio" name="PrivilegeMode" value="individual" required>Individual
								<span></span>
							</label>
							<label class="error" generated="true" for="PrivilegeMode" style="display:none;"></label>
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
			modalBasicAjaxPostData("<?=base_url().'store/user/employee/editaction'?>", "UpdateForm")
		}
	});
</script>