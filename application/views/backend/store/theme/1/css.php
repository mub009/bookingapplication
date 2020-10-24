<?php
$decodeCSS=array();
$cssData="";
if($css)
{
    $decodeCSS=json_decode($css['json']);
    $cssData=$decodeCSS->css;
}
?>
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>codemirror.css">
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>fullscreen.css">
<link rel="stylesheet" href="<?=base_url('assets/admin/textareaCode/')?>night.css">
<script src="<?=base_url('assets/admin/textareaCode/')?>codemirror.js"></script>
<script src="<?=base_url('assets/admin/textareaCode/')?>xml.js"></script>
<script src="<?=base_url('assets/admin/textareaCode/')?>fullscreen.js"></script>
<form id="UpdateInformation" method="post"><textarea id="code" name="json[css]" rows="5">
<?=$cssData?>
</textarea>
<center>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
</form>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        theme: "night"
    });
</script>
<script>
    $(document).ready(function () {
        $('#UpdateInformation').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url().'store/theme/one/ajaxactioncss'?>",
                    "UpdateInformation", false)
            }
        });
    });
</script>