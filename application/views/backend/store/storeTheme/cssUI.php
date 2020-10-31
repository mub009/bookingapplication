<?php
$decodeCSS=array();
$cssData="";
//if($css)
//{
//    $decodeCSS=json_decode($css['json']);
//    $cssData=$decodeCSS->css;
//}
?>
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>codemirror.css">
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>fullscreen.css">
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>night.css">
<script src="<?=base_url('assets/admin/textareaCode/')?>codemirror.js"></script>
<script src="<?=base_url('assets/admin/textareaCode/')?>xml.js"></script>
<script src="<?=base_url('assets/admin/textareaCode/')?>fullscreen.js"></script>
<form id="UpdateCss" method="post" class="form-horizontal form-bordered">
        <div class="modal-body">
            <div class="portlet light form-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green"></i>
                        <span class="caption-subject font-green bold uppercase">CSS Code</span>
                    </div>
                    <div class="actions">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
    <textarea id="code" name="css" rows="5">
<?=$themeDetails['css']?>
</textarea>

                    </div>
                </div>
            </div>

        </div>
    <div class="modal-footer">
        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
        <input type="submit" id="insert" class="btn green" name='submit' value="Save changes">
    </div>
    <input type="hidden" name="storeActivatedThemeId" value="<?=dataEncode($themeDetails['storeActivatedThemeId'])?>">
</form>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        theme: "3024-night",
        styleActiveLine: true,
        matchBrackets: true
    });
</script>
<script>
    $(document).ready(function () {
        $('#UpdateCss').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url().'store/theme/actioncss'?>","UpdateCss", false)
            }
        });
    });
</script>