

<?php


/**
 * Api Dealer Controller
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


 

class Api_Dealer_Controller extends Api_Controller
{

     /**
    * Global container variables for API Security Purpose
    *
    */

    private $DecodeAuthData;

    private $UnauthorizedOTPAPIList=array('');

    private $AllowedUsers=array(22);

    private $ApiDealerJwtKey;

    public function __construct()
    {
        parent::__construct();

        $this->ApiDealerJwtKey=$this->config->item('api_dealer_jwt_key');

        $this->_APIProtection($this->authenticationKey);
    }

    private function _APIProtection($authKey)
    {
        //hard of api Authorization

        $this->DecodeAuthData = $this->authorization_token->ValidateToken($authKey,$this->ApiDealerJwtKey,$this->APIJwtAlgorithm,0);

        $this->_set_UserFeatures($this->DecodeAuthData,$this->APIName,$this->UnauthorizedOTPAPIList,$this->AllowedUsers);

    }


}