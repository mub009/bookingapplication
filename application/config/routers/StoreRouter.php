<?php
$storeRouterPath='store/';
$route[$storeRouterPath.'dashboard'] = 'backend/store/DashboardController/index';
//user
    //store employee
    $route[$storeRouterPath.'user/employee/employee_username_validation'] ='backend/store/user/StoreEmployeeController/employeeUserNameValidation';
    $route[$storeRouterPath.'user/employee'] = 'backend/store/user/StoreEmployeeController/index';
    $route[$storeRouterPath.'user/employee/datatable'] = 'backend/store/user/StoreEmployeeController/ajaxAction_datatable';
    $route[$storeRouterPath.'user/employee/addui'] = 'backend/store/user/StoreEmployeeController/addUI';
    $route[$storeRouterPath.'user/employee/post_employee'] = 'backend/store/user/StoreEmployeeController/post_employee';  
    $route[$storeRouterPath.'user/employee/editform/(:any)'] ='backend/store/user/StoreEmployeeController/editUI/$1';
    $route[$storeRouterPath.'user/employee/editaction'] ='backend/store/user/StoreEmployeeController/editAction';
   //service provider
    $route[$storeRouterPath.'user/serviceprovider'] = 'backend/store/user/ServiceProviderController/index';
    $route[$storeRouterPath.'user/serviceprovider/datatable'] = 'backend/store/user/ServiceProviderController/ajaxAction_datatable';
    $route[$storeRouterPath.'user/serviceprovider/addui'] = 'backend/store/user/ServiceProviderController/addUI';
    $route[$storeRouterPath.'user/serviceprovider/post_employee'] = 'backend/store/user/ServiceProviderController/post_employee';  
    $route[$storeRouterPath.'user/serviceprovider/editform/(:any)'] ='backend/store/user/ServiceProviderController/editUI/$1';
    $route[$storeRouterPath.'user/serviceprovider/editaction'] ='backend/store/user/ServiceProviderController/editAction';

//theme
$route[$storeRouterPath.'theme'] = 'backend/store/ThemeStoreController/index';
$route[$storeRouterPath.'theme/activethemeui/(:any)'] = 'backend/store/ThemeStoreController/activeConfirmUI/$1';
$route[$storeRouterPath.'theme/actionactivetheme'] = 'backend/store/ThemeStoreController/actionActiveTheme';


   //Profile
$route[$storeRouterPath.'profile'] = 'backend/store/ProfileController/withOutCSRF__index';
$route[$storeRouterPath.'profile/profilephoto'] = 'backend/store/ProfileController/changeProfilePhoto';
$route[$storeRouterPath.'profile/updatepersonalInfo'] = 'backend/store/ProfileController/updatePersonalInfo';
$route[$storeRouterPath.'profile/oldpasswordchecking'] = 'backend/store/ProfileController/oldPasswordChecking';
$route[$storeRouterPath.'profile/passwordchange'] = 'backend/store/ProfileController/changePassword';
$route[$storeRouterPath.'profile/privacyupdate'] = 'backend/store/ProfileController/privacyUpdate';

$route[$storeRouterPath.'layout'] = 'backend/store/LayoutController/index';

   
?>