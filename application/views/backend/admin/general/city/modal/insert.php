<form action="" id="InsertForm" method="post" class="form-horizontal form-bordered">
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
							
							
						<select class="form-control" name='countryId' onchange="stateData(this.value)" required>
								<option value=""><?='Select Country'?></option>
								<?php
foreach ($country as $row) {
    ?>
								<option value="<?=$row['countryId']?>"><?=$row['countryName'] . '(' . $row['countryCode'] . ')'?></option>
								<?php
}
?>

							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="State">State
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
						<select class="form-control" name='stateId' id="stateId" required>
								<option value=""><?='Select State'?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="cityName">City Name
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="text" require class="form-control" name="cityName"
								placeholder="Enter City Name" autocomplete="off" required>
								<br>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;" for="cityCode">City Code
							<span class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">
							<input type="text" require class="form-control" id="cityCode" name="cityCode"
								placeholder="Enter City Code" autocomplete="off" required>
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
		<input type="submit" id="insert" class="btn green" name='submit' value="Save changes">
	</div>
</form>

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
	$('#InsertForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/general/city/addaction'?>", "InsertForm");
		}
	}); 
</script>