<form  id="InsertForm" method="post" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Add Menu</span>
                </div>
            </div>
            <div class="portlet-body form">
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="identityName">Identity Name
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="identityName"
                            placeholder="Enter Identity Name " autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
  
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="type">Header</label>
                    <div class="col-md-4">
                      <select  class="form-control" name="type" id="type" required>
                        <option value="">Select Type</option>
                        <option value="category">Category</option>
                        <option value="page">Page</option>
                        <option value="link">link</option>
                      </select>
                    </div>
                </div>
            <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="type">Type
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                      <select  class="form-control" name="type" id="type" required>
                        <option value="">Select Type</option>
                        <option value="category">Category</option>
                        <option value="page">Page</option>
                        <option value="link">link</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="pageLink">Page
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="pageLink"
                            placeholder="Enter Page" autocomplete="off" required="" aria-invalid="false">
                    </div>
                  
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="Category">CategoryId
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="categoryId"
                            placeholder="Enter CategoryId " autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" style=" text-align:left;" for="link">Link
                        <span class="required" aria-required="true"> * </span></label>
                    <div class="col-md-4">
                        <input type="text" require="" class="form-control " name="link"
                            placeholder="Enter link " autocomplete="off" required="" aria-invalid="false">
                    </div>
                </div>
  
            </div>
            <center>
                <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa">Back</a>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>



<form  id="InsertForm" method="post" class="form-horizontal form-bordered">
    <div class="modal-body">
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Add Menu</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-group">
                <div class="row">
                     <div class="col-md-2">
                       1
                     </div>
                     <div class="col-md-6">
                     <label class="control-label" style=" text-align:left;" for="pageLink">Page</label><br>
                    </div>
                    <div class="col-md-2">
                    <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline-sm linkVa">Add</a>
                    <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa"><i class="fa fa-arrow-up"></i></a>
                    <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa"><i class="fa fa-arrow-down"></i></a>
                       
                    </div>
                    <div class="col-md-2">
                    <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                
            </div>
            <center>
                <a href="<?=base_url('store/booking/offer/')?>" class="btn dark btn-outline linkVa">Back</a>
                <input type="submit" class="btn green" name='submit' value="Save">
            </center>
        </div>
    </div>
</form>



<script>
    $(document).ready(function () {
        $('#InsertForm').validate({
            submitHandler: function () {
                AjaxPostDataWithImage("<?=base_url('store/booking/offer/addaction')?>","InsertForm", false, '<?=base_url('store/booking/offer/')?>');
            }
        });
        $('.datepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:mm A'
        });


    });
</script>
