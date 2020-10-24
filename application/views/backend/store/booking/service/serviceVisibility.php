<?php
$contentName=($view['is_visible']==1)?"Show":"Hidden";
?>
<form action="" id="Form" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Do You Agree To <?=$contentName?> The Service?</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
		
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
		<input type="submit"  class="btn btn-danger" name='submit' value="Yes">
	</div>
	<input type="hidden" name='storeServicesId' value="<?=dataEncode($view['storeServicesId'])?>">
</form>

<script>
	$('#Form').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'store/booking/service/hideorshowaction'?>", "Form",true,'<?=base_url('store/booking/service')?>')
		}
	});
</script>