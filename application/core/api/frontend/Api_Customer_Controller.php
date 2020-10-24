<?php

/**
 * Api Customer Controller
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


class Api_Customer_Controller extends Api_Controller
{

     /**
    * Global container variables for API Security Purpose
    *
    */

    private $DecodeAuthData;
    private $UnauthorizedOTPAPIList=array('c_customer_registration','r_ShopList','sample_cron');

    private $AllowedUsers=array(33);

    private $ApiCustomerJwtKey;

    public function __construct()
    {
        parent::__construct();

        $this->ApiCustomerJwtKey=$this->config->item('api_customer_jwt_key');

        $this->_APIProtection($this->authenticationKey);
    }

    private function _APIProtection($authKey)
    {

        $this->DecodeAuthData = $this->authorization_token->ValidateToken($authKey,$this->ApiCustomerJwtKey,$this->APIJwtAlgorithm,0);

        $this->_set_UserFeatures($this->DecodeAuthData,$this->APIName,$this->UnauthorizedOTPAPIList,$this->AllowedUsers);

    }


}