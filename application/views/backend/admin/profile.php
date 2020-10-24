
                     
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="<?=$userInfo['profilePicOG']?>" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?=(!empty($userInfo['firstName']))?$userInfo['firstName'].' '.$userInfo['lastName']:$userInfo['userName']?> </div>
                                            <div class="profile-usertitle-job"> <?=(!empty($userInfo['occupation']))?$userInfo['occupation']:'Employee'?> </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        <!-- <div class="profile-userbuttons">
                                            <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                            <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                        </div> -->
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <!-- <li>
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-home"></i> Overview </a>
                                                </li> -->
                                                <li class="active">
                                                    <a href="<?=base_url('admin/profile');?>">
                                                        <i class="icon-settings"></i> Account Settings </a>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="row">
                            <!-- <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-share font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
                                        </div>
                                        <div class="actions">
                                            
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="height: 300px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
                                            <ul class="feeds">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 161.002px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                        <div class="scroller-footer">
                                            <div class="btn-arrow-link pull-right">
                                                <a href="javascript:;">See All Records</a>
                                                <i class="icon-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" action="#" id="personalInfoForm" method="post">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                                                                <div class="form-group">
                                                                    <label class="control-label">First Name</label>
                                                                    <input type="text" placeholder="John" value="<?=$userInfo['firstName']?>" name="firstName" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Last Name</label>
                                                                    <input type="text" placeholder="Doe" Name="lastName" value="<?=$userInfo['lastName']?>" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Mobile Number</label>
                                                                    <input type="text" placeholder="+1 646 580 DEMO (6284)" value="<?=$userInfo['mobileNumber']?>" name="mobileNumber" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Interests</label>
                                                                    <input type="text" placeholder="Design, Web etc." name="interests" value="<?=$userInfo['interests']?>" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Occupation</label>
                                                                    <input type="text" placeholder="Web Developer" name="occupation" value="<?=$userInfo['occupation']?>" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">About</label>
                                                                    <textarea class="form-control" rows="3" name="about"  placeholder=""><?=$userInfo['about']?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Website Url</label>
                                                                    <input type="text" placeholder="http://www.mywebsite.com"  value="<?=$userInfo['websiteUrl']?>" name="websiteUrl" class="form-control" required> </div>
                                                                <div class="margiv-top-10">
                                                                    <input type="submit" value="Update" class="btn green">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE AVATAR TAB -->
                                                        <div class="tab-pane" id="tab_1_2">
                                                            
                                                            <form action="#" role="form" id="profileForm" method="post">
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="<?=$userInfo['profilePicOG']?>" alt=""> </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                        <span class="btn red btn-outline btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="hidden" value="" name="..."><input type="file" name="profilePic"
                                                                            accept="image/*" required> </span></span>
                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix margin-top-10">
                                                                        <span class="label label-danger">NOTE! </span>
                                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                    </div>
                                                                </div>
                                                                <div class="margin-top-10">
                                                                    <input type="submit" class="btn green" value="Update">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE AVATAR TAB -->
                                                        <!-- CHANGE PASSWORD TAB -->
                                                        <div class="tab-pane" id="tab_1_3">
                                                            <form action="#" id="passwordForm">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                                                                <div class="form-group">
                                                                    <label class="control-label">Current Password</label>
                                                                    <input type="password" name="oldPassword" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">New Password</label>
                                                                    <input type="password" name="newPassword" id="newPassword" class="form-control" required> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Re-type New Password</label>
                                                                    <input type="password" name="retypePassword"   data-rule-equalTo="#newPassword" class="form-control" required> </div>
                                                                <div class="margin-top-10">
                                                                    <input type="submit" class="btn green" value="Change Password"> 
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                        <!-- PRIVACY SETTINGS TAB -->
                                                        <div class="tab-pane" id="tab_1_4">
                                                            <form action="#" id="privacySettingsForm" method="post">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                                                                <table class="table table-light table-hover">
                                                                    <tbody><tr>
                                                                        <td> Is Need Email Notification? </td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="is_email" value="1" <?=($userInfo['is_emailNotification']==1)?'checked':''?>> Yes
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="is_email" value="0" <?=($userInfo['is_emailNotification']==0)?'checked':''?>> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Is Need SMS Notification?</td>
                                                                        <td>
                                                                            <div class="mt-radio-inline">
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="is_sms" value="1" <?=($userInfo['is_SMSNotification']==1)?'checked':''?>> Yes
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-radio">
                                                                                    <input type="radio" name="is_sms" value="0"  <?=($userInfo['is_SMSNotification']==0)?'checked':''?>> No
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                          
                                                                </tbody></table>
                                                                <!--end profile-settings-->
                                                                <div class="margin-top-10">
                                                                    <input type="submit" class="btn green" value="Update">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- END PRIVACY SETTINGS TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                  
<script>
$(document).ready(function () {
    $('#profileForm').validate({
		submitHandler: function () {
			AjaxPostDataWithImage("<?=base_url().'admin/profile/profilephoto'?>", "profileForm",false,"<?=base_url().'admin/profile'?>");
		}
	});
    $('#personalInfoForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/profile/updatepersonalInfo'?>", "personalInfoForm",false);
		}
	});

    $('#privacySettingsForm').validate({
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/profile/privacyupdate'?>", "privacySettingsForm",false);
		}
	});
    $('#passwordForm').validate({
        rules: {
			oldPassword: {
				required: true,
				remote: "<?=base_url().'admin/profile/oldpasswordchecking'?>",
			}
		},
		messages: {
			oldPassword: {
				required: "You must enter old Password.",
				remote: "{0} Not Matched.",
			}
		},
		submitHandler: function () {
			modalBasicAjaxPostData("<?=base_url().'admin/profile/passwordchange'?>", "passwordForm",false,"<?=base_url().'admin/dashboard'?>");
		}
	});
});
 
</script>