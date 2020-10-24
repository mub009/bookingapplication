<?=$note?>

<div class="row">
    <div class="col-md-6 ">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-setting"></i> Message Configuration </div>
            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" id="MessageConfiguration" role="form">
                    <div class="form-body">

                     <div class="form-group" id="validation_url_insert">
                            <label class="col-md-3 control-label">SMS URL</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?=$MessageSettingsData['url']?>"
                                    name="url" placeholder="URL"> </div>
                        </div>

                        
                    </div>
                    <center>
                        <div class="form-actions">

                            <input type="submit" value="update" id="messageConfigurationbtn" class="btn green">

                        </div>
                    </center>

                </form>
            </div>
        </div>
    </div>





  <div class="col-md-6 ">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-setting"></i>  Message Settings </div>
            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" id="MessageConfiguration" role="form">
                    <div class="form-body">
                       
                    <div class="form-group">
                            <label class="col-md-3 control-label">Order</label>
                            <div class="col-md-9">

                                <input id="order" type="checkbox"
                                    <?=($MessageSettingsData['is_order']==1)?'checked':''?>>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">OTP</label>
                            <div class="col-md-9">

                                <input id="otp" type="checkbox" <?=($MessageSettingsData['is_OTP']==1)?'checked':''?>>

                            </div>
                        </div>


                    </div>
                    <center>
                        <div class="form-actions">

                            <input type="submit" value="update"  id="MessageSettingsbtn" class="btn green">

                        </div>
                    </center>

                </form>
            </div>
        </div>
    </div>




</div>

<script>
 
 window.addEventListener("DOMContentLoaded", function() {
    
    $("input[type=\"checkbox\"], input[type=\"radio\"]").not("[data-switch-no-init]")
                .bootstrapSwitch();
    

    });

    (function () {

        var otp, order;

        var is_otp_textbox = true;

        $(function () {

            hljs.initHighlightingOnLoad();





            $(document).ready(function () {



                $('#MessageSettingsbtn').click(function (e) {
                    e.preventDefault();


                    this.otp = $("#otp").bootstrapSwitch('state');

                    this.order = $("#order").bootstrapSwitch('state');

                    $.ajax({
                        type: "post",
                        url: "<?=base_url().'backend/admin/setting/messagesettings/settingUpdate'?>",
                        data: {
                            is_order: this.order,
                            is_otp: this.otp
                        },
                        dataType: "json",
                        success: function (response) {
                            console.log(response);

                            if (response.statusCode == 200) {
                                swal({
                                    title: "Successfully Update",
                                    text: "",
                                    type: "success",
                                });

                            }
                        }
                    });

                });


                $('#messageConfigurationbtn').click(function (e) {
                    e.preventDefault();

                    this.otp = $("#otp").bootstrapSwitch('state');

                    this.order = $("#order").bootstrapSwitch('state');

                    $.ajax({
                        type: "post",
                        url: "<?=base_url().'backend/admin/setting/messagesettings/configUpdate'?>",
                        data: $('#MessageConfiguration').serialize(),
                        dataType: "json",
                        success: function (response) {
                            console.log(response);

                            if (response.statusCode == 200) {
                                swal({
                                    title: "Successfully Update",
                                    text: "",
                                    type: "success",
                                });
                            }
                            else if(response.statusCode == 400)
                            {
                            
                            
                if (typeof response.data.password != 'undefined') {

                 $("#validation_password_insert").addClass("has-error");

                 $('#error_password_insert').remove();

                 $('#validation_password_insert .col-md-9').append(
                    "<span class='help-block' id='error_password_insert'>" + response.data.password +
                    "</span>");
                
                } else {
                
                    $("#validation_password_insert").removeClass("has-error");

                    $('#error_password_insert').remove();

                    $("#validation_password_insert").addClass("has-success");


                }



            
        if(typeof response.data.url != 'undefined') {

        $("#validation_url_insert").addClass("has-error");

        $('#error_url_insert').remove();

        $('#validation_url_insert .col-md-9').append(
        "<span class='help-block' id='error_url_insert'>" + response.data.url +
        "</span>");

        } else {

        $("#validation_url_insert").removeClass("has-error");

        $('#error_url_insert').remove();

        $("#validation_url_insert").addClass("has-success");


        }

 if(typeof response.data.username != 'undefined') {

$("#validation_username_insert").addClass("has-error");

$('#error_username_insert').remove();

$('#validation_username_insert .col-md-9').append(
"<span class='help-block' id='error_username_insert'>" + response.data.username +
"</span>");

} else {

$("#validation_username_insert").removeClass("has-error");

$('#error_username_insert').remove();

$("#validation_username_insert").addClass("has-success");


}




                            }

                        }
                    });



                });


            });



        });

    }).call(this);


    $(document).ready(function () {


        $('#submit').click(function (e) {
            e.preventDefault();
            alert('ss');

        });


  

    });
</script>