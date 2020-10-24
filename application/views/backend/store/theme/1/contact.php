<?php
$contactJson=json_decode($contact['json']);
?>
<div class="row">

    <div class="col-md-6">
        <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL">
        </grammarly-extension>
        <div class="c-contact">
            <div class="c-content-title-1">
                <h3 class="uppercase">Contact Info</h3>
                <div class="c-line-left bg-dark"></div>
            </div>
            <form action="#" id="UpdateInformation" method="post">
                <div class="form-group">
                    <input type="text" name="json[location]" placeholder="Your Location" value="<?=(isset($contactJson->location)?$contactJson->location:'')?>" class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" name="json[locationAddress]" placeholder="Your Address" value="<?=(isset($contactJson->locationAddress)?$contactJson->locationAddress:'')?>" class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" name="json[site]" placeholder="Web Site" value="<?=(isset($contactJson->site)?$contactJson->site:'')?>" class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" name="json[phone]" placeholder="Contact Phone" value="<?=(isset($contactJson->phone)?$contactJson->phone:'')?>"  class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" name="json[map]" placeholder="Google Map URL With http://" value="<?=(isset($contactJson->map)?$contactJson->map:'')?>" class="form-control input-md"> </div>
               
                <button type="submit" class="btn grey success">Update</button>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL">
        </grammarly-extension>
        <div class="c-contact">
            <div class="c-content-title-1">
                <h3 class="uppercase">Social Media</h3>
                <div class="c-line-left bg-dark"></div>
                
            </div>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                <div class="form-group">
                    <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
             
                <button type="submit" class="btn grey success">Update</button>
            </form>
        </div>
    </div>
</div>

                                                         

<script>
    $(document).ready(function () {
        $('#UpdateInformation').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url().'store/theme/one/informationupdate'?>", "UpdateInformation",false)
            }
        });
    });
</script>
