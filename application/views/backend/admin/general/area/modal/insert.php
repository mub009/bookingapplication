

<form action="" id="InsertForm" method="post" enctype="multipart/form-data"
				class="form-horizontal form-bordered">
<div class="modal-body">
	<div class="portlet light form-fit bordered">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-social-dribbble font-green"></i>
				<span class="caption-subject font-green bold uppercase">Area</span>
			</div>
			<div class="actions">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			</div>
		</div>
		<div class="portlet-body form">
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;">Country Name <span
								class="required" aria-required="true"> * </span></label>
						<div class="col-md-7 ">

							<select class="form-control"  required name='countryId' onChange="stateData(this.value);">
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
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;">State Name <span
								class="required" aria-required="true"> * </span></label>
						<div class="col-md-7">

							<select name="stateId" class="form-control" required  id="stateId" onChange="cityData(this.value);"
								name="state">
								<option value="">Select State</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;">City Name <span class="required"
								aria-required="true"> * </span></label>
						<div class="col-md-7">
							<select name="cityId" id="cityId" class="form-control" required>
								<option value="">Select City</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;">Area Name <span class="required"
								aria-required="true"> * </span></label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="areaName" placeholder="Enter Area Name" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-5" style=" text-align:left;">Area Code <span class="required"
								aria-required="true"> * </span></label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="areaCode" placeholder="Enter area Code" autocomplete="off" required>
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
function cityData(stateId){
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
	$('#InsertForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/general/area/addaction'?>", "InsertForm");
		}
	}); 

</script>