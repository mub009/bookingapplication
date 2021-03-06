<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>MyZooba</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="MyZooba" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/font-awesome/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/simple-line-icons/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/css/select2-bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/components.min.css" rel="stylesheet"
        id="style_components" type="text/css" />
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/global/css/plugins.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/css/login.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">

    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="" method="post">
            <h3 class="form-title font-green">Sign In </h3>

            <div id="msg"></div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"
                    placeholder="User Name" name="UserName" /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
                    placeholder="Password" name="password" /> </div>
            <div class="form-actions">
                <button type="submit" class="btn green uppercase" id="login">Login</button>
                <label class="rememberme check mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" />Remember
                    <span></span>
                </label>
            </div>
        </form>
    </div>
    <div class="copyright"> 2019 © <?=$config_update['CopyRightBy']?>. Developed By <?=$config_update['Provider_By']?>
    </div>




    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap/js/bootstrap.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/js.cookie.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery.blockui.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/plugins/select2/js/select2.full.min.js"
        type="text/javascript"></script>

    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/global/scripts/app.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/components-select2.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url() . 'assets/admin/assets/'?>../assets/pages/scripts/login.min.js" type="text/javascript">
    </script>
    <script>
        $(document).ready(function () {
            $('#clickmewow').click(function () {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>

</body>

<script>
    $(document).ready(function () {
        $(".js").select2({
            tags: true
        });

    });
</script>

<script>
    function Loader() {

        $.blockUI({
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        });

        setTimeout($.unblockUI, 2000);

        $('#loginError').remove();
        $('#msg').append(`<div id="loginError"><div class="alert alert-green display-show">
                    <button class="close" data-close="alert"></button>Login Successfully</div></div>`);
    }

    $(document).ready(function () {
        $('#login').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?=base_url('ajaxactionstorelogin')?>",
                data: $('.login-form').serialize(),
                dataType: "json",
                success: function (response) {
                    $("[name='serverToken']").val(response.token);
                    if (response.statusCode == 400) {
                        $('#loginError').remove();
                        $('#msg').append(`<div id="loginError"><div class="alert alert-danger display-show">
                    <button class="close" data-close="alert"></button>` + response.data + `</div></div>`);
                    } else if (response.statusCode == 200) {
                        window.location.href = "<?=base_url()?>" + response.data;
                    }
                }
            });

        });

    });
</script>

</html>