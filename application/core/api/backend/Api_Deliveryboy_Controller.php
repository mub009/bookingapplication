<?php


/**
 * Api Deliveryboy Controller
 *
 * @author: mubashir  
 * 
 * @phn:+91-9633871889
 * 
 * @version: 1.0.0
 *
 **@extends:API_Controller
 *
 */


class Api_Deliveryboy_Controller extends Api_Controller
{

     /**
    * Global container variables for API Security Purpose
    *
    */

    private $DecodeAuthData;

    private $UnauthorizedOTPAPIList=array('r_register_deliveryboy');

    private $AllowedUsers=array(77,66);

    private $ApiDeliveryBoyJwtKey;

    public function __construct()
    {
        parent::__construct();

        $this->ApiDeliveryBoyJwtKey=$this->config->item('api_deliveryboy_jwt_key');

        $this->_APIProtection($this->authenticationKey);
    }

    private function _APIProtection($authKey)
    {
        //hard of api Authorization

        $this->DecodeAuthData = $this->authorization_token->ValidateToken($authKey,$this->ApiDeliveryBoyJwtKey,$this->APIJwtAlgorithm,0);

        $this->_set_UserFeatures($this->DecodeAuthData,$this->APIName,$this->UnauthorizedOTPAPIList,$this->AllowedUsers);

    }


}