
<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase"><?=$view['areaName']?></span>
            </div>
            <div class="actions">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
        </div>
        <div class="portlet-body form">
        <div  class="form-horizontal form-bordered">
        <div class="form-group">
                <label class="control-label col-md-5" style=" text-align:left;">Country</label>
                <div class="col-md-7">
                    <div><?=$view['countryName']?> </div>
                </div>
            </div> 
             <div class="form-group">
                <label class="control-label col-md-5" style=" text-align:left;">State</label>
                <div class="col-md-7">
                    <div><?=$view['stateName']?> </div>
                </div>
            </div> 
             <div class="form-group">
                <label class="control-label col-md-5" style=" text-align:left;">City</label>
                <div class="col-md-7">
                    <div><?=$view['cityName']?> </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5" style=" text-align:left;">Area Name</label>
                <div class="col-md-7">
                    <div><?=$view['areaName']?> </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5" style=" text-align:left;">Area Code </label>
                <div class="col-md-7">
                    <div><?=$view['areaCode']?> </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>