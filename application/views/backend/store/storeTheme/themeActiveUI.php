
<form action="" id="activeThemeForm" method="post" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase"><?="Are you sure to Active Theme? "?></span>
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
    <input type="hidden" name='themeId' value="<?=dataEncode($themeDetails['themeId'])?>">
</form>

<script>
    $('#activeThemeForm').validate({
        submitHandler: function () {
            modalBasicAjaxPostData("<?=base_url().'store/theme/actionactivetheme'?>", "activeThemeForm",true,'<?=base_url('store/theme')?>')
        }
    });
</script>
