<form  id="updateForm" method="post" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Edit Offer</span>
                </div>
            </div>
            <div class="portlet-body form">
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="storeCategoryId">Service Name
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                      <select  class="form-control" name="storeServicesId" id="storeServices" required>
                      <option value="">Select Service Name</option>
                      <?php
                      foreach ($storeServices as $key => $value) {
                      ?>
                      <option value="<?=$value['storeServicesId']?>" <?=($view['storeServicesId']=$value['storeServicesId'])?'selected':''?>><?=$value['serviceName_en']?></option>
                      <?php
                      }
                      ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="serviceName">Offer title
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="offerTitle_en"
                            placeholder="Enter English" autocomplete="off" value="<?=$view['offerTitle_en']?>" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="offerTitle_ar"
                            placeholder="Enter Arabic" autocomplete="off"  value="<?=$view['offerTitle_ar']?>" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="Category">Offer Description
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="offerDescription_en"
                            placeholder="Enter English" autocomplete="off" value="<?=$view['offerDescription_en']?>" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="offerDescription_ar"
                            placeholder="Enter Arabic" autocomplete="off" value="<?=$view['offerDescription_ar']?>" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="discount">New Cost
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="number"  require="" class="form-control " name="discount"
                            placeholder="Enter cost" autocomplete="off" value="<?=$view['discount']?>"  required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="Category">Offer Start Date & End Date
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" data-date-format="dd MM yyyy - HH:ii p" class="form-control datepicker" name="offerStartDate"
                            placeholder="Enter Offer Start Date" value="<?=$view['offer_start']?>"  autocomplete="off" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" data-date-format="dd MM yyyy - HH:ii p" class="form-control datepicker" name="offerEndDate"
                            placeholder="Enter End Date" value="<?=$view['offer_end']?>"  autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <center>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                    style="width: 200px; height: 150px; line-height: 150px;"><img src="<?=$view['img1200x800']?>"></div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-6">
                        <center>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                    style="width: 200px; height: 150px; line-height: 150px;"></div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input type="hidden" value="" name="..."><input type="file" name="image"
                                            accept="image/*"> </span>
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
            </div>
            <center>
                <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa">Back</a>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
    <input type="hidden" name="storeOfferId" value="<?=dataEncode($view['storeOfferId'])?>">
</form>
<script>
    $(document).ready(function () {
        $('#updateForm').validate({
            submitHandler: function () {
                AjaxPostDataWithImage("<?=base_url('store/booking/offer/editaction')?>","updateForm", false, '<?=base_url('store/booking/offer/')?>');
            }
        });
        $('.datepicker').datetimepicker({
    format: 'yyyy-mm-dd hh:mm A'
});

    });
</script>
