<?php


/**
 * Api Supervisor Controller
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


class Api_Supervisor_Controller extends Api_Controller
{

     /**
    * Global container variables for API Security Purpose
    *
    */

    private $DecodeAuthData;

    private $UnauthorizedOTPAPIList=array('');

    private $AllowedUsers=array(55);

    private $ApiSupervisorJwtKey;

    public function __construct()
    {
        
        parent::__construct();

        $this->ApiSupervisorJwtKey=$this->config->item('api_supervisor_jwt_key');

        $this->_APIProtection($this->authenticationKey);
    }

    private function _APIProtection($authKey)
    {
        //hard of api Authorization

        $this->DecodeAuthData = $this->authorization_token->ValidateToken($authKey,$this->ApiSupervisorJwtKey,$this->APIJwtAlgorithm,0);

        $this->_set_UserFeatures($this->DecodeAuthData,$this->APIName,$this->UnauthorizedOTPAPIList,$this->AllowedUsers);

    }


}