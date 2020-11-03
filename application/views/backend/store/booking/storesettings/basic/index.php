<?php
$basicPage="store/booking/storesettings/basic/";
?>
<form  id="updateBasicSettingsForm" method="post" class="form-horizontal form-bordered">
<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Basic Settings</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-group">
                    <div class="col-md-12">
                        <center>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                    style="width: 200px; height: 150px; line-height: 150px;"></div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input type="hidden" value="" name="..."><input type="file" id="logoImage" name="image"
                                            accept="image/*" > </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                        Remove
                                    </a>
                                    <br><br>
                                    <div class="alert alert-success">
                                        <strong>For Perfect Size 100kb, Width:100px and Height:100px</strong>. </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Store Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="storeName"
                            placeholder="Enter Store Name" autocomplete="off"  value="<?=$storeDetails['storeName']?>" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >About</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="about"
                            placeholder="Enter About" autocomplete="off" value="<?=$storeDetails['storeAbout']?>"   aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Address</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" value="<?=$storeDetails['storeAddress']?>" name="address"
                            placeholder="Enter Address" autocomplete="off" aria-invalid="false">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <center>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                    style="width: 50px; height: 50px; line-height: 50px;"></div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input type="hidden" value="" name="..."><input type="file" name="browserIconImage"
                                            accept="image/*" > </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                        Remove
                                    </a>
                                    <br>
                                    <label class="control-label" style=" text-align:left;" >Store tab icon in the browser</label>
                                    <div class="alert alert-success">
                                        <strong>The most appropriate size is 32 pixels wide, 32 pixels high</strong>. </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                
            </div>
            <center>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>
<form  id="updateTechnicalSupportForm" method="post" class="form-horizontal form-bordered">
<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
 
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Technical support</span>
                </div>
            </div>
            <div class="portlet-body form">
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Contact</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="contact"
                            placeholder="Enter Contact" value="<?=$storeDetails['contact1']?>" autocomplete="off"  aria-invalid="false">
                    </div>
                </div>
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Contact 2</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="contact2"
                            placeholder="Enter Contact 2" value="<?=$storeDetails['contact2']?>" autocomplete="off"  aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Email Address</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="email"
                            placeholder="Enter Email" value="<?=$storeDetails['email']?>" autocomplete="off"  aria-invalid="false">
                    </div>
                </div>
            </div>
            <center>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>
<form  id="updateSocialMediaForm" method="post" class="form-horizontal form-bordered">
<input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Social Media</span>
                </div>
            </div>
            <div class="portlet-body form">
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Twitter</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="socialTwitter"
                            placeholder="Enter Twitter" autocomplete="off"  value="<?=$storeDetails['socialMediaTwitterId']?>" aria-invalid="false">
                    </div>
                </div>
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Facebook</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="socialFacebook"
                            placeholder="Enter Facebook"  value="<?=$storeDetails['socialMediaFacebookId']?>" autocomplete="off"  aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Instagram</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="socialInstagram"
                            placeholder="Enter Instagram" value="<?=$storeDetails['socialMediaInstagramId']?>" autocomplete="off"  aria-invalid="false">
                    </div>
                   
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Snap Chat</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control " name="socialSnapChat"
                            placeholder="Enter Snap Chat"  value="<?=$storeDetails['socialMediaSnapChatId']?>" autocomplete="off" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" >Youtube</label>
                    <div class="col-md-4">
                        <input type="text" value="<?=$storeDetails['socialMediaYoutubeId']?>" class="form-control " name="socialYoutube"
                            placeholder="Enter Youtube" autocomplete="off" aria-invalid="false">
                    </div>
                </div>
    
            </div>
            <center>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('#logoImage').change(function (e) { 
            e.preventDefault();
            AjaxPostDataWithImage("<?=base_url($basicPage.'logoupload')?>","updateBasicSettingsForm",false);
        });
        $('#updateBasicSettingsForm').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url($basicPage.'updatebasicsettingsaction')?>","updateBasicSettingsForm",false); 
            }
        });
        $('#updateTechnicalSupportForm').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url($basicPage.'updatetechnicalsupportaction')?>","updateTechnicalSupportForm",false);
            }
        });
        $('#updateSocialMediaForm').validate({
            submitHandler: function () {
                modalBasicAjaxPostData("<?=base_url($basicPage.'updatesocialmediaaction')?>","updateSocialMediaForm",false);
            }
        });
        $('.datepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:mm A'
        });
    });
</script>