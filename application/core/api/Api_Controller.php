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
 **@extends:Api_Controller
 *
 */


class Api_Controller extends MY_Controller
{
    /**
    * Global container variables for API Security Purpose
    *
    */
    
    public $data = array();

    protected $authenticationKey;

    protected $APIName;

    private $UnauthorizedAPIList=array('r_country_list','mobile_verification','sample_cron','login_checking','r_country_checking','u_user_fcm_token','r_skipcart_products','r_set_cron_job','r_searchbyshop','r_ShopList','r_shop_products','r_categories_shop','r_businesstype');


    protected $APIJwtAlgorithm;

    public function __construct()
    {
        parent::__construct();

        $this->header();

        $this->APIJwtAlgorithm=$this->config->item('api_jwt_algorithm');


        $this->authenticationKey=$this->input->get_request_header($this->config->item('AuthName'), true);
        
   
        $this->APIName=$this->uri->segment(2);
        
        $this->_is_authentication($this->authenticationKey,$this->APIName,$this->UnauthorizedAPIList);

        $this->_is_APIKEY($this->APIName,$this->UnauthorizedAPIList);

    
     
    }

    private function header()
    {
        header('Content-Type: application/json');
    }

    protected function _UserAccessabilityChecking($StatusId,$Deviceid,$UserMasterId,$APIName,$UnauthorizedOTPAPIList=null)
    {
        $occur=0;
        $APIList=array("u_customer_fcm","u_dealer_fcm","u_supervisor_fcm","u_deliveryboy_fcm");
        foreach($APIList as $k => $list)
        {
        
            if($list==$APIName)
            {
                $occur++;
            }
        }

        $device_id=$this->input->get_request_header('DeviceId');
        if ($StatusId==4) {
       
            $this->json_encode(4, 'Your Account is Blocked');
       
        } elseif ($StatusId==3) {
       
            $this->json_encode(3, 'Your Account was Deleted');
       
        } elseif ($StatusId==2) {
            
            if(!in_array($APIName,$UnauthorizedOTPAPIList))
                {
                    

                  $this->json_encode(2, 'Your Account is Pending');
                
                }
                else
                {
                    return true;
                }

        } 
        else if($UserMasterId<>44 && $occur==0)
        {
            
            
            if($device_id==$Deviceid)
            {
                return true;
            }
            else
            {
                $this->json_encode(5, 'you are already login in another device');
            }
       
        }
        else
        {
            return true;
        }
    }

    private function _is_authentication($authKey,$APIName,$UnauthorizedAPIList)
    {

    if(!empty($UnauthorizedAPIList))
       {
        if(!in_array($APIName,$UnauthorizedAPIList))
        {
          if (empty($authKey)) {

             $this->json_encode(400, 'No Authentication key');

          }
        
        }
       
     }
    }

    private function _is_APIKEY($APIName,$UnauthorizedAPIList)
    {
    if(!empty($UnauthorizedAPIList))
       {
        if(!in_array($APIName,$UnauthorizedAPIList))
        { 
         if (empty($this->input->get_request_header($this->config->item('APIKEY_Name'))) or $this->input->get_request_header($this->config->item('APIKEY_value')) == $this->config->item('APIKEY_Name')) {

            $this->json_encode(400, 'No Api Key');

         }
       }
     }   
    }

    protected function _set_UserFeatures($DecodeAuthData,$APIName,$UnauthorizedOTPAPIList,$AllowedUsers)
    {

      
        $this->_auth_checking($DecodeAuthData,$AllowedUsers,$APIName);
   

        $this->data['userinfo']=$this->Api_login_Modal->userDetails($DecodeAuthData['data']->UserId);

        $this->_UserAccessabilityChecking($this->data['userinfo']['StatusId'],$this->data['userinfo']['DeviceId'],$this->data['userinfo']['UserMasterId'],$APIName,$UnauthorizedOTPAPIList);
                
        $this->CurrentTimeAndDate($this->data['userinfo']['TimeZone']);
    

    }

    protected function _auth_checking($decodeAuthData,$AllowedUsers,$APIName)
    {

        // if( $APIName<>'r_set_cron_job')
        // {
        if($decodeAuthData['status']!=1)
        {
            $this->json_encode(400,'UnAuthentication');
        }

        if(!in_array($decodeAuthData['data']->UserTypeId,$AllowedUsers))
        {
            $this->json_encode(400,'Authentication key expire');
        }
    //}

    }


}
