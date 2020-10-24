<?php
$adminRouterName='admin/';
$route[$adminRouterName.'dashboard'] = 'backend/admin/DashboardController/index';
//employee
$route[$adminRouterName.'employee'] = 'backend/admin/EmployeeController/index';
$route[$adminRouterName.'employee/datatable'] = 'backend/admin/EmployeeController/ajaxAction_datatable';
$route[$adminRouterName.'employee/modal_addui'] = 'backend/admin/EmployeeController/modalAction_addUI';
$route[$adminRouterName.'employee/post_employee'] = 'backend/admin/EmployeeController/post_employee';
$route[$adminRouterName.'employee/employee_username_validation'] = 'backend/admin/EmployeeController/employeeUserNameValidation';
$route[$adminRouterName.'employee/editform/(:any)'] ='backend/admin/EmployeeController/editFormByModal/$1';
$route[$adminRouterName.'employee/editaction'] ='backend/admin/EmployeeController/editAction';
//General 
   //country
    $route[$adminRouterName.'general/country'] = 'backend/admin/general/CountryController/index';
    $route[$adminRouterName.'general/country/datatable'] = 'backend/admin/general/CountryController/datatable';
    $route[$adminRouterName.'general/country/getdetails/(:any)'] ='backend/admin/general/CountryController/countryModalDetails/$1';
    //state
    $route[$adminRouterName.'general/state'] = 'backend/admin/general/StateController/index';
    $route[$adminRouterName.'general/state/datatable'] = 'backend/admin/general/StateController/datatable';
    $route[$adminRouterName.'general/state/getdetails/(:any)'] ='backend/admin/general/StateController/stateDetailsByModal/$1';
    $route[$adminRouterName.'general/state/addform'] ='backend/admin/general/StateController/addFormByModal';
    $route[$adminRouterName.'general/state/addaction'] ='backend/admin/general/StateController/addAction';
    $route[$adminRouterName.'general/state/editform/(:any)'] ='backend/admin/general/StateController/editFormByModal/$1';
    $route[$adminRouterName.'general/state/editaction/(:any)'] ='backend/admin/general/StateController/editAction/$1';
   //city
    $route[$adminRouterName.'general/city'] = 'backend/admin/general/CityController/index';
    $route[$adminRouterName.'general/city/datatable'] = 'backend/admin/general/CityController/datatable';
    $route[$adminRouterName.'general/city/getdetails/(:any)'] ='backend/admin/general/CityController/viewCityDetailsByModal/$1';
    $route[$adminRouterName.'general/city/addform'] ='backend/admin/general/CityController/addFormByModal';
    $route[$adminRouterName.'general/city/addaction'] ='backend/admin/general/CityController/addAction';
    $route[$adminRouterName.'general/city/editform/(:any)'] ='backend/admin/general/CityController/editFormByModal/$1';
    $route[$adminRouterName.'general/city/editaction'] ='backend/admin/general/CityController/editAction';
   //Area
    $route[$adminRouterName.'general/area'] = 'backend/admin/general/AreaController/index';
    $route[$adminRouterName.'general/area/datatable'] = 'backend/admin/general/AreaController/datatable';
    $route[$adminRouterName.'general/area/getdetails/(:any)'] ='backend/admin/general/AreaController/viewAreaDetailsByModal/$1';
    $route[$adminRouterName.'general/area/addform'] ='backend/admin/general/AreaController/addFormByModal';
    $route[$adminRouterName.'general/area/addaction'] ='backend/admin/general/AreaController/addAction';
    $route[$adminRouterName.'general/area/editform/(:any)'] ='backend/admin/general/AreaController/editFormByModal/$1';
    $route[$adminRouterName.'general/area/editaction'] ='backend/admin/general/AreaController/editAction';
//store 
   //store 
    $route[$adminRouterName.'store'] = 'backend/admin/store/StoreController/index';
    $route[$adminRouterName.'store/modal_addui'] = 'backend/admin/store/StoreController/addUI';
    $route[$adminRouterName.'store/post_store'] = 'backend/admin/store/StoreController/post_store';  
    $route[$adminRouterName.'store/datatable'] = 'backend/admin/store/StoreController/ajaxAction_datatable';
    $route[$adminRouterName.'store/editform/(:any)'] ='backend/admin/store/StoreController/editUI/$1';
    $route[$adminRouterName.'store/editaction'] ='backend/admin/store/StoreController/editAction';
   //store employee
    $route[$adminRouterName.'store/employee/employee_username_validation'] ='backend/admin/store/StoreEmployeeController/employeeUserNameValidation';
    $route[$adminRouterName.'store/employee'] = 'backend/admin/store/StoreEmployeeController/index';
    $route[$adminRouterName.'store/employee/datatable'] = 'backend/admin/store/StoreEmployeeController/ajaxAction_datatable';
    $route[$adminRouterName.'store/employee/addui'] = 'backend/admin/store/StoreEmployeeController/addUI';
    $route[$adminRouterName.'store/employee/post_employee'] = 'backend/admin/store/StoreEmployeeController/post_employee';  
    $route[$adminRouterName.'store/employee/editform/(:any)'] ='backend/admin/store/StoreEmployeeController/editUI/$1';
    $route[$adminRouterName.'store/employee/editaction'] ='backend/admin/store/StoreEmployeeController/editAction';
    $route[$adminRouterName.'store/employee/passwordaction'] ='backend/admin/store/StoreEmployeeController/passwordaction';
    $route[$adminRouterName.'store/employee/passwordchange/(:any)'] ='backend/admin/store/StoreEmployeeController/passwordChange/$1';


//Settings
$route[$adminRouterName.'setting'] = 'backend/admin/setting/SettingController/index';
$route[$adminRouterName.'setting/privilege']='backend/admin/setting/PrivilegeController/index';
//Profile
$route[$adminRouterName.'profile'] = 'backend/admin/ProfileController/withOutCSRF__index';
$route[$adminRouterName.'profile/profilephoto'] = 'backend/admin/ProfileController/changeProfilePhoto';
$route[$adminRouterName.'profile/updatepersonalInfo'] = 'backend/admin/ProfileController/updatePersonalInfo';
$route[$adminRouterName.'profile/oldpasswordchecking'] = 'backend/admin/ProfileController/oldPasswordChecking';
$route[$adminRouterName.'profile/passwordchange'] = 'backend/admin/ProfileController/changePassword';
$route[$adminRouterName.'profile/privacyupdate'] = 'backend/admin/ProfileController/privacyUpdate';
//Order
$route[$adminRouterName.'order/reservations'] = 'backend/admin/OrderController/reservations';
$route[$adminRouterName.'order/reservationsdatatable'] = 'backend/admin/OrderController/ajaxAction_reservationsDatatable';
$route[$adminRouterName.'order/store'] = 'backend/admin/OrderController/store';
$route[$adminRouterName.'order/storedatatable'] = 'backend/admin/OrderController/ajaxAction_storeDatatable';
//Reservations
$route[$adminRouterName.'reservations/today'] = 'backend/admin/ReservationsController/today';
$route[$adminRouterName.'reservations/all'] = 'backend/admin/ReservationsController/all';
$route[$adminRouterName.'reservations/todaydatatable'] = 'backend/admin/ReservationsController/ajaxAction_todayDatatable';
$route[$adminRouterName.'reservations/alldatatable'] = 'backend/admin/ReservationsController/ajaxAction_allDatatable';

?>