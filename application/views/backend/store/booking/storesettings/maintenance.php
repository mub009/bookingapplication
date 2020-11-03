

<form action="" id="InsertForm" method="post" class="form-horizontal form-bordered">
	<div class="modal-body">
		<div class="portlet light form-fit bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-social-dribbble font-green"></i>
					<span class="caption-subject font-green bold uppercase">Maintenance mode</span>
				</div>
				<div class="actions">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
			</div>
			<div class="portlet-body form">
				<div class="form-body">



                <div class="row">
                <div class="col-xs-10">
                    <h5 class="mt-0 mb-0">
                        <h6 class="caption-subject font-green bold">Maintenance mode</h6>
                    </h5>
                </div>
                <div class="col-xs-2 text-right">
                      <input class="active-time_2 make-switch" value="1" type="checkbox">
                </div>

                <div class="col-xs-12">
                    <p class="text-muted text-muted-small">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                After activating the maintenance mode, you alone will be able to enter the store and
                                work on preparing it, while customers will see the maintenance page. </font>
                            <font style="vertical-align: inherit;">To view it, log in to your store from another browser
                                or log out from the control panel
                            </font>
                        </font>
                    </p>
                </div>
            </div>

                <h6 class="caption-subject font-green bold">Main address for maintenance</h6>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="sicon-format-text"></i></span>
                        <input name="title" id="store_status_title" rows="3" class="form-control"
                            value="" placeholder="Address the status of the closed site">
                    </div>

                    <h6 class="caption-subject font-green bold">Maintenance message</h6>	
				<div class="input-group">
                        <span class="input-group-addon"><i class="sicon-align-center"></i></span>
                        <textarea name="message" maxlength="200" id="store_status_message" rows="3" class="form-control"
                            placeholder="Closed site status text"></textarea>
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
	$('#InsertForm').validate({
		rules: {
			employeeUserName: {
				required: true,
				remote: "<?=base_url().'admin/employee/employee_username_validation'?>"
			}
		},
		messages: {
			employeeUserName: {
				required: "You must enter a registration name with valid characters.",
				remote: "{0}  User Name Not Available."
			}
		},
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/employee/post_employee'?>", "InsertForm")
		}
	}); // e
</script>