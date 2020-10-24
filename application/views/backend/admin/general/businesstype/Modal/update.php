<div class="modal-body">
    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Update BusinessType</span>
            </div>
            <div class="actions">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="" id="UpdateForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                <input type="hidden" class="form-control" name="id" value="<?=$id?>" id="edit_business_id">
                <div class="form-body">
                    <div class="form-group" id="validation_business_name_update">
                        <label class="control-label col-md-5" style=" text-align:left;">Business Name</label>
                        <div class="col-md-7 ">

                            <input type="text" class="form-control" id="edit_business_name" name="business_name"
                                placeholder="Enter Business Name" autocomplete="off">




                        </div>
                    </div>



                  
                   

                    <div class="form-group" id="validation_business_status_update">
                        <label class="control-label col-md-5" style=" text-align:left;">Country Status</label>
                        <div class="col-md-7">

                            <select name='business_status' id="editStatusList" class="form-control">

                                <?php

foreach ($status as $row) {
    ?>
                                <option value="<?=$row['Id']?>">
                                    <?=$row['Name']?>
                                </option>
                                <?php
}

?>
                            </select>
                        </div>
                    </div>






                </div>








                <!-- END FORM-->
        </div>
    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    <input type="submit" id="update" class="btn green" name='update' value="Save changes">
</div>
</form>


<script>
    editFunc("<?=$id?>");

    function editFunc(id) {

        var base_url = '<?=base_url()?>';

        $.ajax({
            url: base_url + 'backend/admin/general/businesstype/Businesstype/details/' + id,
            type: 'get',
            async: false,
            dataType: 'json',
            success: function (response) {


                $("#edit_business_name").val(response[0].BusinessName);

                               

                //edit_Country_id

                $("#editStatusList").children('[value="' + response[0].StatusId + '"]').attr('selected',
                    true);

                // $("#edit_business_status").val(response.txt_attribute_notice);
            }

        });


    }




    // update


    $("#update").click(function (e) {

        e.preventDefault();

        var base_url = '<?=base_url()?>';

        var post_data = $("#UpdateForm").serialize();

        //console.log(post_data);

        //has-error

        $.ajax({
            url: base_url + 'backend/admin/general/businesstype/businesstype/update',
            type: 'POST',
            dataType: "json",
            data: post_data + "&update=true",
            success: function (data) {

                location.reload();

            },
            error: function (jqXhr) {

                var json = $.parseJSON(jqXhr.responseText);

                console.log(jqXhr);


                if (json.business_status == 'undefined') {

                    $("#validation_business_status_update").addClass("has-error");

                    $('#error_business_status_update').remove();

                    $('#validation_business_status_update .col-md-7').append(
                        "<span class='help-block' id='error_business_status_update'>" + json.business_status +
                        "</span>");
                } else {
                    $("#validation_business_status_update").removeClass("has-error");

                    $('#error_business_status_update').remove();

                    $("#validation_business_status_update").addClass("has-success");


                }

            



                if (typeof json.business_name != 'undefined') {


                    $("#validation_business_name_update").addClass("has-error");

                    $('#error_business_name_update').remove();

                    $('#validation_business_name_update .col-md-7').append(
                        "<span class='help-block' id='error_business_name_update'>" + json.business_name +
                        "</span>");

                } else {
                    $("#validation_business_name_update").removeClass("has-error");

                    $('#error_business_name_update').remove();

                    $("#validation_business_name_update").addClass("has-success");


                }
            }
        });


    });
</script>