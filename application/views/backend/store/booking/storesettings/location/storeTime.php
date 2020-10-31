


<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Working Times</span>
        </div>
    </div>
    <div class="portlet-body">
         <div class="body compact">
                <form id="updatetimes" name="updatetimes" class="form-horizontal" onsubmit="return false;" method="POST">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 text-center">
                            <span class="caption-subject font-green-sharp bold uppercase">First Period</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 text-center">
                        <span class="caption-subject font-green-sharp bold uppercase">Second Period</span><h5>
                        </div>
                    </div>
                    <!-- all -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="0-day">All</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="x-from" onChange="xFrom();"  data-format="hh:mm A" class="form-control timepicker" placeholder="Open Time" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="x-to" onChange="xTo();" class="form-control timepicker" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                             
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="x-from_2" onChange="xFrom2();" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="x-to_2" onChange="xTo2();" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                
                            </div>
                        </div>
                    </div>
                    <!-- sun -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="0-day">sun</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="0-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="0-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="0-active" class="active-time make-switch"  value="0" type="checkbox" class="make-switch"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="0-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="0-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="switch">
                                    <label><input id="0-active_2" class="active-time_2 make-switch" value="x" type="checkbox" ></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mon -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="1-day">mon</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="1-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="1-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="1-active" class="active-time make-switch"  value="1" type="checkbox"></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="1-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="1-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="switch">
                                    <label><input id="1-active_2" class="active-time_2 make-switch" value="x" type="checkbox"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tues -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="2-day">tue</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="2-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="2-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="2-active" class="active-time make-switch" value="2" type="checkbox"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="2-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="2-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="2-active_2" class="active-time_2 make-switch" value="x" type="checkbox"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- wed -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="3-day">wed</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="3-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="3-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="3-active" class="active-time make-switch"  value="3" type="checkbox" class="make-switch"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="3-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="3-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="3-active_2" class="active-time_2 make-switch" value="x" type="checkbox"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- thu -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="4-day">thu</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="4-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="4-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="4-active" class="active-time make-switch"  value="4" type="checkbox" ><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="4-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="4-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="switch">
                                    <label><input id="4-active_2" class="active-time_2 make-switch" value="x" type="checkbox"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fri -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="5-day">fri</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="5-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="5-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="5-active" class="active-time make-switch" value="5" type="checkbox" ><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="5-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="5-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="5-active_2" class="active-time_2 make-switch" value="x" type="checkbox"><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sat -->
                    <div class="row clearfix">
                        <!-- first period -->
                        <div class="segment">
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                <label for="6-day">sat</label>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="6-from" class="form-control timepicker fromtime" placeholder="opentime" type="text" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="6-to" class="form-control timepicker totime" placeholder="closetime" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="6-active" class="active-time make-switch"  value="6" type="checkbox" ><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                        <!-- second period -->
                        <div class="segment">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="6-from_2" class="form-control timepicker fromtime_2" placeholder="opentime" type="text">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <label>to</label>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="6-to_2" class="form-control timepicker totime_2" placeholder="closetime" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="switch">
                                    <label><input id="6-active_2" class="active-time_2 make-switch" value="x" type="checkbox" ><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="workingtimes" name="workingtimes" type="hidden">
                 
                 <center>
                    <button onclick="sendTime()" class="btn green waves-effect">Update</button>
                    </center>
                    
                <input type="hidden" name="storeLocationId" value="<?=dataEncode($view['storeLocationId'])?>">
                </form>
            </div>

    </div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

<script src="<?=base_url() . 'assets/admin/assets/add/'?>moment/moment.js"></script>
<script src="<?=base_url() . 'assets/admin/assets/add/'?>moment/moment-round.js"></script>
<script src="<?=base_url() . 'assets/admin/assets/add/'?>moment/moment-range.js"></script>
<script>window['moment-range'].extendMoment(moment);</script>
<script>

$(document).ready(function () {
    $('.timepicker').timepicker({defaultTime: ''});    
    isRTL='en';
        $('#x-to').timepicker().on('changeDate', function (ev) {
            var val = $(this).val();
            $('.totime').val(val);
        });
});
function xFrom()
{
    var val = $('#x-from').val();
    $('.fromtime').val(val);
}
function xTo()
{
    var val = $('#x-to').val();
    $('.totime').val(val);
    
}
function xFrom2()
{
    var val = $('#x-from_2').val();
    $('.fromtime_2').val(val);
}
function xTo2()
{
    var val = $('#x-to_2').val();
    $('.totime_2').val(val);
}
isRTL='en';
<?php
if(!empty($view['workingtimes']))
{
    ?>
initializeWorkingTimes("<?=$view['workingtimes']?>");
    <?php
}
?>
function initializeWorkingTimes(times) {
    var timeArray = parseTiming(times);
    var len = timeArray.length;
    if(len > 1) {
        for(var i=0; i<=len-1; i++) {
            var t = timeArray[i];
            var activeEl = $('#' + t['day'] + '-active');
            var fromEl = $('#' + t['day'] + '-from');
            var toEl = $('#' + t['day'] + '-to');
            var from = t['from'];
            var to = t['to'];
            toggleSwitch(activeEl, true);
            // if(isRTL) {
            //     from = arabicDigitsToHindi(from);
            //     to = arabicDigitsToHindi(to);
            // }
            fromEl.val(from);
            toEl.val(to);
            var hasSecondPeriod = t['from2'] != '' && t['to2'] != '';
            if(hasSecondPeriod) {
                var activeEl2 = $('#' + t['day'] + '-active_2');
                var fromEl2 = $('#' + t['day'] + '-from_2');
                var toEl2 = $('#' + t['day'] + '-to_2');
                var from2 = t['from2'];
                var to2 = t['to2'];
                toggleSwitch(activeEl2, true, '_2');
                // if(isRTL) {
                //     from2 = arabicDigitsToHindi(from2);
                //     to2 = arabicDigitsToHindi(to2);
                // }
                fromEl2.val(from2);
                toEl2.val(to2);
            }
        }
    }
}
function parseTiming(timing) {
    var arr = [];
    var lines = timing.split('|');
    var len = lines.length;
    for(var i=0; i<=len-1; i++) {
        var line = lines[i];
        var temp = line.split('->');
        var dayofweek = temp[0];
        var periods = temp[1].split('&');
        var first_period = periods[0].split('-');
        var from = first_period[0];
        var to = first_period[1];
        
        var from2 = '';
        var to2 = '';
        var hasSecondPeriod = typeof periods[1] !== 'undefined';
        if(hasSecondPeriod) {
            var second_period = periods[1].split('-');
            from2 = second_period[0];
            to2 = second_period[1];
        }
        arr.push({day: dayofweek, from: from, to: to, from2: from2, to2: to2 });
    }
    return arr;
}
function generateTime() {
    var timing = '';
    var momenEN = moment();
    momenEN.locale('en');
    for(var k=0; k<=6; k++) {
        var el = $('#' + k + '-active');
        var el2 = $('#' + k + '-active_2');
        var isChecked = el.is(":checked");
        var isChecked2 = el2.is(":checked");
        var withSecondPeriod = '';
        if(isChecked) {
            var from = $('#' + k + '-from').val().replace(/\s/g,'');
            var to = $('#' + k + '-to').val().replace(/\s/g,'');
            if(from != '' && to != '') {
                if(isRTL) {
                    from = hindiDigitsToArabic(from);
                    to = hindiDigitsToArabic(to);
                }
                to = to == '12:00AM' ? '11:59PM' : to;
                var fromDate = moment(from, "hh:mmA", 'en');
                var toDate =  moment(to, "hh:mmA", 'en');
                if(!fromDate.isBefore(toDate)) {
                    return false;
                }
                if(isChecked2) {
                    alert('ss');
                    var from2 = $('#' + k + '-from_2').val().replace(/\s/g,'');
                    var to2 = $('#' + k + '-to_2').val().replace(/\s/g,'');
                    if(from2 != '' && to2 != '') {
                        if(isRTL) {
                            from2 = hindiDigitsToArabic(from2);
                            to2 = hindiDigitsToArabic(to2);
                        }
                        to2 = to2 == '12:00AM' ? '11:59PM' : to2;
                        var fromDate2 = moment(from2, "hh:mmA", 'en');
                        var toDate2 =  moment(to2, "hh:mmA", 'en');                       
                        if(!fromDate2.isBefore(toDate2)) {
                            return false;
                        }
                        withSecondPeriod = '&' + from2 + '-' + to2;
                    }
                    //check if two periods overlap with each other
                    var range1 = moment.range(fromDate, toDate);
                    var range2 = moment.range(fromDate2, toDate2);
                    var isOverlapping = range1.overlaps(range2);
                    if(isOverlapping) {
                        return undefined;
                    }
                    if(!fromDate2.isAfter(fromDate) || !toDate2.isAfter(toDate)) {
                        return '0';
                    }
                }
                timing += k + '->' + from + '-' + to + withSecondPeriod + '|';
            }
        }
    }
    if(timing == '' ) {return null;} 
    //remove the last '|' symbol and new line
    timing = timing.slice(0, -1);
    return timing;
}

function sendTime() {
    var timing=generateTime();
    console.log(timing);
    if(timing == '') {
        //no times found please add 2 or more
        console.log(timing);
        alert('wt_twomin');
    }
    else if(timing === false) {
        //from field must be less than to field
        alert('fromltto');
    }
    else if(typeof timing == 'undefined') {
        //time ranges (periods) of each day must not overlap
        alert('wt_overlap');
    }
    else if(timing =='0') {
        //first period time range must be before second period
       alert('wt_periods_invalid');
    }
    else if(timing.indexOf('|') == -1 && typeof timing != 'undefined') {
        //there must be at least two days
        alert('wt_twomin');
    }
    else {
        $('#workingtimes').val(timing);
        modalBasicAjaxPostData("<?=base_url().'store/booking/storesettings/location/timeupdateaction'?>", "updatetimes",false);
    }
    return;
}
function toggleSwitch(el, isChecked, affix) {
    affix = affix || '';
    if(el.length > 1) {
        $('.timepicker').prop( "disabled", !isChecked );
    }
    else {
        var i = $(el).val();
        $('#' + i + '-from' + affix).prop( "disabled", !isChecked );
        $('#' + i + '-to' + affix).prop( "disabled", !isChecked );
    }
    $(el).prop("checked", isChecked);
    
    if(isChecked) {
        $(el).closest('.segment').removeClass('disabled');
    }
    else {
        $(el).closest('.segment').addClass('disabled');
    }
}
//first period
$('#x-to').change(function() {
    var val = $(this).val();
    $('.totime').val(val);
});

$('#x-from').change(function() {
    var val = $(this).val();
    $('.fromtime').val(val);
});
$('#active-time-x').change(function() {
    var isChecked = $(this).is(":checked");
    toggleSwitch($(this), isChecked);
    toggleSwitch($('.active-time'), isChecked);
});
$('.active-time').change(function() {
    var isChecked = $(this).is(":checked");
    toggleSwitch($(this), isChecked);
});
//second period
$('#x-to_2').change(function() {
    var val = $(this).val();
    $('.totime_2').val(val);
});
$('#x-from_2').change(function() {
    var val = $(this).val();
    $('.fromtime_2').val(val);
});
$('#active-time-x_2').change(function() {
    var isChecked = $(this).is(":checked");
    toggleSwitch($(this), isChecked, '_2');
    toggleSwitch($('.active-time_2'), isChecked, '_2');
});
$('.active-time_2').change(function() {
    var isChecked = $(this).is(":checked");
    toggleSwitch($(this), isChecked, '_2');
});
function arabicDigitsToHindi(string) {
    var symbolMap = {
        '1': '١',
        '2': '٢',
        '3': '٣',
        '4': '٤',
        '5': '٥',
        '6': '٦',
        '7': '٧',
        '8': '٨',
        '9': '٩',
        '0': '٠'
    };
    var result = string.replace(/[1234567890]/g, function (match) {
        return symbolMap[match];
    });
    result = result.replace('AM', ' ص');
    result = result.replace('PM', ' م');
    return result;
}
function hindiDigitsToArabic(string) {
    var numberMap = {
        '١': '1',
        '٢': '2',
        '٣': '3',
        '٤': '4',
        '٥': '5',
        '٦': '6',
        '٧': '7',
        '٨': '8',
        '٩': '9',
        '٠': '0'
    };
    var result = string.replace(/[١٢٣٤٥٦٧٨٩٠]/g, function (match) {
        return numberMap[match];
    }).replace(/،/g, ',');
    result = result.replace('ص', 'AM');
    result = result.replace('م', 'PM');
    return result;
}

 
</script>