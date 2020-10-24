</div>

</div>
</div>
<!-- END CONTENT BODY -->
</div>

<div class="quick-nav-overlay"></div>




<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
    type="text/javascript"></script>




<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
    type="text/javascript"></script>



<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/respond.min.js"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/excanvas.min.js"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->


<?php
if (empty($select2)) {

    ?>


<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap/js/bootstrap.min.js"
    type="text/javascript"></script>

<?php

}

?>


<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
    type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/jquery.blockui.min.js" type="text/javascript">
</script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
    type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-toastr/toastr.min.js"
    type="text/javascript"></script>


<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/ladda/spin.min.js" type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/ladda/ladda.min.js" type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-sweetalert/sweetalert.min.js"
    type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>pages/scripts/ui-sweetalert.min.js" type="text/javascript">
</script>


<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
    type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/jquery.sparkline.min.js" type="text/javascript">
</script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/scripts/datatable.js" type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/datatables/datatables.min.js"
    type="text/javascript"></script>

<script
    src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
    type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<script src="<?=base_url() . 'assets/admin/assets/'?>global/scripts/app.min.js" type="text/javascript"></script>

<script
    src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-sessiontimeout/bootstrap-session-timeout.min.js"
    type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url() . 'assets/admin/assets/'?>pages/scripts/ui-toastr.min.js" type="text/javascript"></script>


<script src="<?=base_url() . 'assets/admin/assets/'?>pages/scripts/table-datatables-managed.min.js"
    type="text/javascript"></script>

<!-- <script>
    var SessionTimeout = function () {
        var e = function () {
            $.sessionTimeout({
                title: "Login Timeout Notification",
                message: "Your Login is about to expire.",
                keepAliveUrl: "<?=base_url('backend/admin/dashboard')?>",
                redirUrl: "<?=base_url('common/login')?>",
                logoutUrl: "<?=base_url('common/login')?>",
                warnAfter: 900000,
                redirAfter: 1200000,
                ignoreUserActivity: !0,
                countdownMessage: "Redirecting in {timer} seconds.",
                appendTime: true, // appends time stamp to keep alive url to prevent caching
                countdownBar: !0
            })
        };
        return {
            init: function () {
                e()

            }
        }
    }();
    jQuery(document).ready(function () {
        SessionTimeout.init()
    });
</script> -->
<!-- 
<script src="<?=base_url() . 'assets/admin/assets/'?>pages/scripts/ui-session-timeout.min.js" type="text/javascript"></script> -->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->

<script src="<?=base_url() . 'assets/admin/assets/'?>layouts/layout/scripts/layout.min.js" type="text/javascript">
</script>

<script src="<?=base_url() . 'assets/admin/assets/'?>layouts/layout/scripts/demo.min.js" type="text/javascript">
</script>

<script src="<?=base_url() . 'assets/admin/assets/'?>layouts/global/scripts/quick-sidebar.min.js"
    type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>layouts/global/scripts/quick-nav.min.js" type="text/javascript">
</script>

<!-- END THEME LAYOUT SCRIPTS -->
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
    type="text/javascript"></script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/moment.min.js" type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"
    type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
    type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
    type="text/javascript"></script>
<script
    src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
    type="text/javascript"></script>
<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/clockface/js/clockface.js" type="text/javascript">
</script>

<script src="<?=base_url() . 'assets/admin/assets/'?>global/scripts/app.min.js" type="text/javascript"></script>



<script src="<?=base_url() . 'assets/admin/assets/'?>global/plugins/select2/js/select2.full.min.js"
    type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->


<script src="<?=base_url() . 'assets/admin/assets/'?>pages/scripts/table-datatables-managed.min.js"
    type="text/javascript"></script>

<script src="<?=base_url()?>assets/admin/assets/global/highlight.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js" type="text/javascript">
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker();
    });
</script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->

<!-- <script>
    var SessionTimeout = function () {
        var e = function () {
            $.sessionTimeout({
                title: "Login Timeout Notification",
                message: "Your Login is about to expire.",
                keepAliveUrl: "<?=base_url('backend/admin/dashboard')?>",
                redirUrl: "<?=base_url('common/login')?>",
                logoutUrl: "<?=base_url('common/login')?>",
                warnAfter: 900000,
                redirAfter: 1200000,
                ignoreUserActivity: !0,
                countdownMessage: "Redirecting in {timer} seconds.",
                appendTime: true, // appends time stamp to keep alive url to prevent caching
                countdownBar: !0
            })
        };
        return {
            init: function () {
                e()

            }
        }
    }();
    jQuery(document).ready(function () {
        SessionTimeout.init()
    });
</script> -->


<?=(!empty($javascript))?$this->load->view($javascript,'',true):''?>


<script>
    $(document).ready(function () {
        clockUpdate();
        setInterval(clockUpdate, 1000);
    })

    function clockUpdate() {
        var date = new Date();

        function addZero(x) {
            if (x < 10) {
                return x = '0' + x;
            } else {
                return x;
            }
        }

        function twelveHour(x) {
            if (x > 12) {
                return x = x - 12;
            } else if (x == 0) {
                return x = 12;
            } else {
                return x;
            }
        }

        var h = addZero(twelveHour(date.getHours()));
        var m = addZero(date.getMinutes());
        var s = addZero(date.getSeconds());

        $('.digital-clock').text(h + ':' + m + ':' + s)
    }
</script>


</body>

<script>
    function Success(message) {

        // Command: toastr[error]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success(message, 'Notification');
        // toastr.info('Gnome & Growl type non-blocking notifications','Notification');
        // toastr.error('Gnome & Growl type non-blocking notifications','Notification');

        // toastr.warning('Gnome & Growl type non-blocking notifications','Notification');

        //warning

    }


    function errors(message) {

        // Command: toastr[error]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error(message, 'Notification');
        // toastr.info('Gnome & Growl type non-blocking notifications','Notification');
        // toastr.error('Gnome & Growl type non-blocking notifications','Notification');

        // toastr.warning('Gnome & Growl type non-blocking notifications','Notification');

        //warning

    }


    function warning(message) {

        // Command: toastr[error]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.warning(message, 'Notification');
        // toastr.info('Gnome & Growl type non-blocking notifications','Notification');
        // toastr.error('Gnome & Growl type non-blocking notifications','Notification');

        // toastr.warning('Gnome & Growl type non-blocking notifications','Notification');

        //warning

    }


   
    function modalBasicAjaxPostData(url, formIdName,is_modal=true,reload='') {
            //your normal options
                $.ajax({
                    type: "post",
                    url: url,
                    data: $('#' + formIdName).serialize(),
                    dataType: "json",
                    success: function (response) {
                        if (response.statusCode == 200) {
                            Success(response.data.msg);
                            if(is_modal)
                            {
                            $('#basic').modal('toggle');
                            if(reload!='')
                            {
                                setTimeout(function(){ window.location.href = reload; }, 100);
                            }
                            }else{
                                if(reload!='')
                                {
                                setTimeout(function(){ window.location.href = reload; }, 200);
                                }
                            }
                        } else if (response.statusCode == 400) {
                            errors(response.data.msg);
                        }
                        $("[name='serverToken']").val(response.token);
                    },
                    error: function () {
                        warning("Server Data Not get");
                    }
                });
    }

    function AjaxPostDataWithImage(url, formIdName,is_modal=true,reload='') {
            //your normal options
            var form = $('#' + formIdName)[0];
                $.ajax({
                    type: "POST",
                    url: url,
                    enctype: 'multipart/form-data',
                    data:new FormData(form),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function (response) {
                        if (response.statusCode == 200) {
                            Success(response.data.msg);
                            if(is_modal)
                            {
                            $('#basic').modal('toggle');
                            }else{
                                setTimeout(function(){ window.location.href = reload; }, 3000);
                                
                            }
                        } else if (response.statusCode == 400) {
                            errors(response.data.msg);
                        }
                        $("[name='serverToken']").val(response.token);
                    },
                    error: function () {
                        warning("Server Data Not get");
                    }
                });
    }
</script>

<!-- 
// for success - green box
toastr.success('Success messages');

// for errors - red box
toastr.error('errors messages');

// for warning - orange box
toastr.warning('warning messages');

// for info - blue box
toastr.info('info messages'); -->


</html>