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
$route[$StoreBookingPath.'storesettings'] = $StoreBookingController.'StoreSettingController/index';
$route[$StoreBookingPath.'storesettings/settingsaction'] = $StoreBookingController.'StoreSettingController/settingsAction';
$route[$StoreBookingPath.'storesettings/locationaddaction'] = $StoreBookingController.'StoreSettingController/actionAddLocation';
$route[$StoreBookingPath.'storesettings/locationeditaction'] = $StoreBookingController.'StoreSettingController/actionEditLocation';
$route[$StoreBookingPath.'storesettings/locationdeleteaction'] = $StoreBookingController.'StoreSettingController/actionDeleteLocation';
$route[$StoreBookingPath.'storesettings/locationaddui'] = $StoreBookingController.'StoreSettingController/addLocationUI';
$route[$StoreBookingPath.'storesettings/locationeditui/(:any)'] = $StoreBookingController.'StoreSettingController/editLocationUI/$1';
$route[$StoreBookingPath.'storesettings/locationdeleteui/(:any)'] = $StoreBookingController.'StoreSettingController/deleteLocationUI/$1';
$route[$StoreBookingPath.'storesettings/locationdeleteui/(:any)'] = $StoreBookingController.'StoreSettingController/deleteLocationUI/$1';
$route[$StoreBookingPath.'storesettings/locationtimeui/(:any)'] = $StoreBookingController.'StoreSettingController/locationTimeUI/$1';
$route[$StoreBookingPath.'storesettings/timeupdateaction'] = $StoreBookingController.'StoreSettingController/timeUpdateAction';


$route[$StoreBookingPath.'storesettings/location'] = $StoreBookingController.'ReservationsController/today';
$route[$StoreBookingPath.'reservations/all'] = $StoreBookingController.'ReservationsController/all';
$route[$StoreBookingPath.'reservations/todaydatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_todayDatatable';
$route[$StoreBookingPath.'reservations/alldatatable'] = $StoreBookingController.'ReservationsController/ajaxAction_allDatatable';


?>