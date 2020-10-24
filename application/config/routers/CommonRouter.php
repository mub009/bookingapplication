<?php
$commonRouterName='common/';

//state
$route[$commonRouterName.'getstatelist'] = 'common/GeneralController/getStateByCountryId';
//city
$route[$commonRouterName.'getcitylist'] = 'common/GeneralController/getCityByStateId';
//area
$route[$commonRouterName.'getarealist'] = 'common/GeneralController/getAreaByCityId';

?>