<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">                                                                                                                                                                                                                                                                                   
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Add Business Type</span>
            </div>
            <div class="actions">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="" id="InsertForm" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                <div class="form-body">
                    <div class="form-group" id="validation_business_type_insert">
                        <label class="control-label col-md-5" style=" text-align:left;">Name Of Business <span class="required" aria-required="true"> * </span></label>
                        <div class="col-md-7 ">
                            <input type="text" class="form-control" id="business_name" name="business_name"
                                placeholder="Enter Business Name" autocomplete="off">
                        </div>
                    </div>     
                </div>
                <!-- END FORM-->
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    <input type="submit" class="btn green" id="insert" name='submit' value="Save changes">
</div>
</form>



<script>
    $("#insert").click(function (e) {

        e.preventDefault();

        var base_url = '<?=base_url()?>';

        var post_data = $("#InsertForm").serialize();

        //console.log(post_data);
        var flag;
        //has-error  var me = $(this);

        var me = $(this);

if (me.data('requestRunning')) {
    alert('Please Wait Your request is processing');
    return;
}
me.data('requestRunning', true);


        $.ajax({
            url: base_url + 'backend/admin/general/businesstype/businesstype/insert',
            type: 'POST',
            async: false,
            dataType: "json",
            data: post_data + "&submit=true",
            success: function (data) {
                flag=false;
                location.reload();

               

            },
            error: function (jqXhr) {

                var json = $.parseJSON(jqXhr.responseText);

                console.log(json);
                    
                      flag=true;
                      me.data('requestRunning', false);

                if (typeof json.business_name != 'undefined') {


                    $("#validation_business_type_insert").addClass("has-error");

                    $('#error_business_type_insert').remove();

                    $('#validation_business_type_insert .col-md-7').append(
                        "<span class='help-block' id='error_business_type_insert'>" + json.business_name +
                        "</span>");

                } else {
                    $("#validation_business_type_insert").removeClass("has-error");

                    $('#error_business_type_insert').remove();

                    $("#validation_business_type_insert").addClass("has-success");


                }                    

            },
             complete: function() {
                 
if(flag)
{
    me.data('requestRunning', false);
}
else
{
    me.data('requestRunning', true);
}

     }
        });


    });
</script>