<?php
$StoreBookingPath='store/booking/';
$StoreBookingController='backend/store/booking/';
//Categories
$route[$StoreBookingPath.'categories/addname_validation'] =$StoreBookingController.'CategoriesController/menuName_validation';
$route[$StoreBookingPath.'categories'] = $StoreBookingController.'CategoriesController/index';
$route[$StoreBookingPath.'categories/addui'] = $StoreBookingController.'CategoriesController/withOutCSRF_addUI';
$route[$StoreBookingPath.'categories/addaction'] = $StoreBookingController.'CategoriesController/addAction';  
$route[$StoreBookingPath.'categories/editform/(:any)'] =$StoreBookingController.'CategoriesController/withOutCSRF_editUI/$1';
$route[$StoreBookingPath.'categories/editaction'] =$StoreBookingController.'CategoriesController/editAction';
$route[$StoreBookingPath.'categories/deleteui/(:any)'] =$StoreBookingController.'CategoriesController/deleteUI/$1';
$route[$StoreBookingPath.'categories/deleteaction'] =$StoreBookingController.'CategoriesController/deleteAction';
$route[$StoreBookingPath.'categories/hideorshowaction'] =$StoreBookingController.'CategoriesController/hideOrShowAction';
$route[$StoreBookingPath.'categories/hideorshowui/(:any)'] =$StoreBookingController.'CategoriesController/hideOrShowUI/$1';
//Service
$route[$StoreBookingPath.'service'] = $StoreBookingController.'ServiceController/index';
$route[$StoreBookingPath.'service/addui'] = $StoreBookingController.'ServiceController/withOutCSRF_addUI';
$route[$StoreBookingPath.'service/addaction'] = $StoreBookingController.'ServiceController/addAction';  
$route[$StoreBookingPath.'service/editform/(:any)'] =$StoreBookingController.'ServiceController/withOutCSRF_editUI/$1';
$route[$StoreBookingPath.'service/editaction'] =$StoreBookingController.'ServiceController/editAction';
$route[$StoreBookingPath.'service/deleteui/(:any)'] =$StoreBookingController.'ServiceController/deleteUI/$1';
$route[$StoreBookingPath.'service/deleteaction'] =$StoreBookingController.'ServiceController/deleteAction';
$route[$StoreBookingPath.'service/hideorshowaction'] =$StoreBookingController.'ServiceController/hideOrShowAction';
$route[$StoreBookingPath.'service/hideorshowui/(:any)'] =$StoreBookingController.'ServiceController/hideOrShowUI/$1';
//offer
$route[$StoreBookingPath.'offer'] = $StoreBookingController.'OfferController/index';
$route[$StoreBookingPath.'offer/addui'] = $StoreBookingController.'OfferController/withOutCSRF_addUI';
$route[$StoreBookingPath.'offer/addaction'] = $StoreBookingController.'OfferController/addAction';  
$route[$StoreBookingPath.'offer/editform/(:any)'] =$StoreBookingController.'OfferController/withOutCSRF_editUI/$1';
$route[$StoreBookingPath.'offer/editaction'] =$StoreBookingController.'OfferController/editAction';
$route[$StoreBookingPath.'offer/deleteui/(:any)'] =$StoreBookingController.'OfferController/deleteUI/$1';
$route[$StoreBookingPath.'offer/deleteaction'] =$StoreBookingController.'OfferController/deleteAction';
$route[$StoreBookingPath.'offer/hideorshowaction'] =$StoreBookingController.'OfferController/hideOrShowAction';
$route[$StoreBookingPath.'offer/hideorshowui/(:any)'] =$StoreBookingController.'OfferController/hideOrShowUI/$1';
//Reservations
$route[$StoreBookingPath.'reservations/today'] = $StoreBookingController.'ReservationsController/today';
$route[$StoreBookingPath.'reservations/all'] = $StoreBookingController.'ReservationsController/all';
$route[$StoreBookingPath.'reservations/todaydatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_todayDatatable';
$route[$StoreBookingPath.'reservations/alldatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_allDatatable';
//store settings
$route[$StoreBookingPath.'storesettings'] = $StoreBookingController.'settings/StoreSettingController/index';
$route[$StoreBookingPath.'storesettings/settingsaction'] = $StoreBookingController.'settings/StoreSettingController/settingsAction';
$route[$StoreBookingPath.'storesettings/maintenanceui'] = $StoreBookingController.'settings/StoreSettingController/maintenanceUI';

  //location
    $route[$StoreBookingPath.'storesettings/location/index'] = $StoreBookingController.'settings/LocationSettingController/index';
    $route[$StoreBookingPath.'storesettings/location/locationaddaction'] = $StoreBookingController.'settings/LocationSettingController/actionAddLocation';
    $route[$StoreBookingPath.'storesettings/location/locationeditaction'] = $StoreBookingController.'settings/LocationSettingController/actionEditLocation';
    $route[$StoreBookingPath.'storesettings/location/locationdeleteaction'] = $StoreBookingController.'settings/LocationSettingController/actionDeleteLocation';
    $route[$StoreBookingPath.'storesettings/location/locationaddui'] = $StoreBookingController.'settings/LocationSettingController/addLocationUI';
    $route[$StoreBookingPath.'storesettings/location/locationeditui/(:any)'] = $StoreBookingController.'settings/LocationSettingController/editLocationUI/$1';
    $route[$StoreBookingPath.'storesettings/location/locationdeleteui/(:any)'] = $StoreBookingController.'settings/LocationSettingController/deleteLocationUI/$1';
    $route[$StoreBookingPath.'storesettings/location/locationdeleteui/(:any)'] = $StoreBookingController.'settings/LocationSettingController/deleteLocationUI/$1';
    $route[$StoreBookingPath.'storesettings/location/locationtimeui/(:any)'] = $StoreBookingController.'settings/LocationSettingController/locationTimeUI/$1';
    $route[$StoreBookingPath.'storesettings/location/timeupdateaction'] = $StoreBookingController.'settings/LocationSettingController/timeUpdateAction';
  //BasicSetting
    $route[$StoreBookingPath.'storesettings/basic/index'] = $StoreBookingController.'settings/BasicSettingController/withOutCSRF_index';
    $route[$StoreBookingPath.'storesettings/basic/logoupload'] =$StoreBookingController.'settings/BasicSettingController/logoUpload';
    $route[$StoreBookingPath.'storesettings/basic/updatebasicsettingsaction'] =$StoreBookingController.'settings/BasicSettingController/actionBasicSettings';
    $route[$StoreBookingPath.'storesettings/basic/updatetechnicalsupportaction'] =$StoreBookingController.'settings/BasicSettingController/actionTechnicalSupport';
    $route[$StoreBookingPath.'storesettings/basic/updatesocialmediaaction'] =$StoreBookingController.'settings/BasicSettingController/actionSocialMedia';
  //menu
    $route[$StoreBookingPath.'storesettings/menu/index'] = $StoreBookingController.'settings/MenuSettingController/index';
  

//slider
$route[$StoreBookingPath.'slider'] = $StoreBookingController.'SliderController/index';
$route[$StoreBookingPath.'slider/addui'] = $StoreBookingController.'SliderController/withOutCSRF_addUI';
$route[$StoreBookingPath.'slider/addaction'] = $StoreBookingController.'SliderController/addAction';  
$route[$StoreBookingPath.'slider/editform/(:any)'] =$StoreBookingController.'SliderController/withOutCSRF_editUI/$1';
$route[$StoreBookingPath.'slider/editaction'] =$StoreBookingController.'SliderController/editAction';
$route[$StoreBookingPath.'slider/deleteui/(:any)'] =$StoreBookingController.'SliderController/deleteUI/$1';
$route[$StoreBookingPath.'slider/deleteaction'] =$StoreBookingController.'SliderController/deleteAction';
$route[$StoreBookingPath.'slider/hideorshowaction'] =$StoreBookingController.'SliderController/hideOrShowAction';
$route[$StoreBookingPath.'slider/hideorshowui/(:any)'] =$StoreBookingController.'SliderController/hideOrShowUI/$1';


$route[$StoreBookingPath.'storesettings/location'] = $StoreBookingController.'ReservationsController/today';
$route[$StoreBookingPath.'reservations/all'] = $StoreBookingController.'ReservationsController/all';
$route[$StoreBookingPath.'reservations/todaydatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_todayDatatable';
$route[$StoreBookingPath.'reservations/alldatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_allDatatable';


?>