<?php

/**
 * Api Vendor Controller
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


class Api_Vendor_Controller extends API_Controller
{
    /**
    * Global container variables for API Security Purpose
    *
    */

    private $DecodeAuthData;

    private $AllowedUsers=array(44);

    private $APIVendorJwtKey;

    private $UnauthorizedOTPAPIList=array('c_vendor_registration','c_vendor_add_node');


    public function __construct()
    {
        parent::__construct();

          $this->APIVendorJwtKey=$this->config->item('api_vendor_jwt_key');

          $this->_APIProtection($this->authenticationKey);  
    }
    
    private function _APIProtection($authKey)
    {
            //hard of api Authorization
            $this->DecodeAuthData =  $this->authorization_token->ValidateToken($authKey,$this->APIVendorJwtKey,$this->APIJwtAlgorithm,0);

            $this->_set_UserFeatures($this->DecodeAuthData,$this->APIName,$this->UnauthorizedOTPAPIList,$this->AllowedUsers);

     }


}