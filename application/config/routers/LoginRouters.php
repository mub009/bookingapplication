<?php
$route['admin'] = 'common/AdminLoginController/index';
$route['admin/logout'] = 'common/AdminLoginController/logout';
$route['ajaxActionAdminLogin'] = 'common/AdminLoginController/ajaxAction_login';
$route['dealer'] = 'common/DealerLoginController/index';
$route['dealer/logout'] = 'common/DealerLoginController/logout';
$route['ajaxactiondealerlogin'] = 'common/DealerLoginController/ajaxAction_login';
$route['store'] = 'common/StoreLoginController/index';
$route['store/logout'] = 'common/StoreLoginController/logout';
$route['ajaxactionstorelogin'] = 'common/StoreLoginController/ajaxAction_login';
?>