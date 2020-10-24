
<form  id="InsertForm" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Edit Service</span>
                </div>
            </div>
            <div class="portlet-body form">
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="storeCategoryId">Category
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                      <select  class="form-control" name="storeCategoryId" required>
                      <option value="">Select Category</option>
                      <?php
                      foreach ($storeCategory as $key => $value) {
                      ?>
                      <option value="<?=$value['storeServiceCategoriesId']?>" <?=($value['storeServiceCategoriesId']==$view['storeServiceCategoriesId'])?'selected':''?>><?=$value['categoryName_en']?></option>
                      <?php
                      }
                      ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="serviceName">Service Name
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['serviceName_en']?>" class="form-control " name="serviceName_english"
                            placeholder="Enter English" autocomplete="off" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['serviceName_ar']?>" class="form-control " name="serviceName_arabic"
                            placeholder="Enter Arabic" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4"  style=" text-align:left;" for="Category">Service Description
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['serviceDescription_en']?>" class="form-control " name="serviceDescription_en"
                            placeholder="Enter English" autocomplete="off" required="" aria-invalid="false">
                    </div>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['serviceDescription_ar']?>" class="form-control " name="serviceDescription_ar"
                            placeholder="Enter Arabic" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="cost">cost
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" value="<?=$view['cost']?>"  class="form-control " name="cost"
                            placeholder="Enter cost" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="duration">duration
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require=""  value="<?=$view['duration']?>"  class="form-control " name="duration"
                            placeholder="Enter duration" autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="assignServicer">Assign Servicer
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                      <select  class="form-control"  multiple="multiple" id="serviceProviders" name="serviceProviderEmployeeId[]" required>
                      <option value="">Select Service Provider</option>
                      <?php
                      foreach ($storProviderList as $key => $value) {
                      ?>
                      <option value="<?=$value['storeEmployeeId']?>" <?=($value['activeStoreServicesId'])?'selected':''?>><?=$value['userName']?></option>
                      <?php
                      }
                      ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                        <center>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                    style="width: 200px; height: 150px; line-height: 150px;"></div>
        
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
                                            accept="image/*" required> </span>
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
                <a href="<?=base_url('store/booking/service/')?>" class="btn dark btn-outline linkVa">Back</a>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('#InsertForm').validate({
            submitHandler: function () {
                AjaxPostDataWithImage("<?=base_url('store/booking/service/editaction')?>","InsertForm", false, '<?=base_url('store/booking/service/')?>');
            }
        });
        $('#serviceProviders').select2({
  placeholder: 'Select Service Providers',
  allowClear: true
});
    });
</script>
