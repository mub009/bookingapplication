<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginlocked extends MY_Controller
{
    


    private $decodeMultiUserDetails;

    private $encodeUserInformation;
    
    private $is_session=false;

    public function __construct()
    {
        parent::__construct();

        $this->_Auth_protection();
    }

    
    public function index()
    {

    
        $this->load->view('common/Loginlocked',$this->data);

    }

    private function _Auth_protection()
    {  
        $this->decodeMultiUserDetails = $this->authorization_token->ValidateToken($this->session->userdata('token'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));

        if($this->decodeMultiUserDetails['status'])
        {
            $this->_lockedAccount();

            $this->is_session=true;
        }
        else
        {

            $this->encodeUserInformation = $this->authorization_token->ValidateToken($this->session->userdata('lockUserData'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));
      
            print_r($this->encodeUserInformation);

            die();
            $this->data['userinfo']=json_decode($this->decodeMultiUserDetails);

            $this->is_session=true;

        }

       
        if(!$this->is_session)
        {

        $this->session->unset_userdata('token','');

        $this->session->unset_userdata('multiuser','');
 
        $this->session->unset_userdata('lockUserData','');
 
         $this->session->set_flashdata('Error', 'permission not allowed');
         
         redirect('common/login');
        }

    }

    private function _lockedAccount()
    {
        $this->data['userinfo']=$this->Login_Modal->UserMobileNumberAndCountry($this->decodeMultiUserDetails['data']->userId);

        $this->encodeUserInformation=json_encode($this->data['userinfo'],true);

        // $this->session->set_userdata(array('lockuserdata','ss'));

        // $dan = $this->authorization_token->ValidateToken($this->session->userdata('lockuserdata'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));
        

    
        // print_r($dan);
    
        die();
        
        $this->session->unset_userdata('token','');

        $this->session->unset_userdata('multiuser','');
    }
}