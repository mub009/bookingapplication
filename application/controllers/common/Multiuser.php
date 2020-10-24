<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Multiuser
 *
 * @author:  Mubashir
 *
 * @version: 1.0.0
 *
 **extends:Multiuser
 *
 */

class Multiuser extends MY_Controller
{

    private $UserMobileNumber;

    private $decodeMultiUserDetails;

    private $other;

    public function __construct()
    {

        parent::__construct();

        
        $this->_Ath_Protection();

        $this->load->model("online/backend/common/Login_Modal", 'Login_Modal');

    }



    public function index()
	{

        $this->data['userDetails']=$this->_Authinfo();

        $this->load->view('common/multiuser',$this->data);
    }

    private function _Ath_Protection()
    {
        $this->decodeMultiUserDetails = $this->authorization_token->ValidateToken($this->session->userdata('multiuser'),$this->config->item('multi_user_web_token_key'),$this->config->item('web_jwt_algorithm'));

       if(!$this->decodeMultiUserDetails['status'])
       {
        $this->session->unset_userdata('token','');

        $this->session->set_flashdata('Error', 'permission not allowed');
        
        redirect('common/login');
       }
    } 

    
    public function userLogin($userTypeId='')
	{

        if($userTypeId)
        {
            $this->_authReplace($userTypeId);

        }
        else
        {
            json_output(400,'no data');
        }
    
    }

    private function _Authinfo($userTypeId='')
    {
  
     
        if(!empty($this->decodeMultiUserDetails['data']->userId))
        {

            
        $this->UserMobileNumber=$this->Login_Modal->UserMobileNumberAndCountry($this->decodeMultiUserDetails['data']->userId);

      
        return $this->Login_Modal->MultiUser($this->UserMobileNumber['MobileNo'],$this->UserMobileNumber['CountryId'],$userTypeId);
       
        }
        
    }

    private function _authReplace($userTypeId)
    {
        $userDetails=$this->_Authinfo($userTypeId);

    
            if($userDetails)
            {
                
        
       
                $logged_in_sess = array('userId'=>$userDetails['UserId']);
       
                $this->session->set_userdata('multiuser',$this->authorization_token->GenerateToken($logged_in_sess,$this->config->item('multi_user_web_token_key'),$this->config->item('web_jwt_algorithm')));

                $this->session->set_userdata('token',$this->authorization_token->GenerateToken($logged_in_sess,$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm')));

               json_output(200,'success');

            }
            else{

                json_output(400,'fail');
            }

            
     

    }


    public function loginDirection($userTypeId)
    {
  
            if(!empty($userTypeId))
            {
                $this->_authReplace($userTypeId);

                // $this->AccountInformation = $this->Login_Modal->login($this->session->userdata('Username'),$this->session->userdata('Country'));
               
                // if ($this->AccountInformation == true) {
               

                // $this->PasswordComparison = password_verify($this->session->userdata('Password'), $this->otherCheck['Password']);
                // // print $this->session->userdata('Username')."    hh     ".$this->session->userdata('Country')."    hh      ".$this->session->userdata('Password')."      ".$this->AccountInformation['Password'];
                // // die();
                // if ($this->PasswordComparison) {
    
                $this->other=$this->Login_Modal->loginDirection($userTypeId);

                if($userTypeId==44)
                {
                    $userDetails=$this->_Authinfo($userTypeId);

                    $this->otherCheck=$this->Login_Modal->loginCheck($userDetails['UserId']);
               
                if($this->otherCheck['StatusId']==1)
                {
                    if($this->otherCheck['OtpVerification']==1)
                    {
                        $this->session->unset_userdata('Username');
                        $this->session->unset_userdata('Country');
                        $this->session->unset_userdata('Password');

                        json_output(200,$this->other);

                    }
                    else
                    {
                        $this->data= 'OTP Verification is Pending, Please login to your mobile to verify the OTP';
                        $this->ResponseStatus=400;
                        json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>"",'users'=>""));

                    }

                }
                else
                {
                   
                    if ($this->otherCheck['StatusId'] == 2) {

                       // json_output(400,'Your Account is Pending');
                        $this->data= 'Your Account is Pending';
                        $this->ResponseStatus=400;

                    } elseif ($this->otherCheck['StatusId'] == 3) {

                        $this->data = 'Your Account was Deleted';
                        $this->ResponseStatus=400;


                  
                    } elseif ($this->otherCheck['StatusId'] == 4) {

                        $this->data = 'Your Account has been Blocked';
                        $this->ResponseStatus=400;


                    } elseif ($this->otherCheck['OtpVerification'] == '2') {
                        $this->data = 'Please Active Your Account';
                        $this->ResponseStatus=400;


                    }
                    json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>"",'users'=>""));
                }
            }
            else
            {
                $this->session->unset_userdata('Username');
                $this->session->unset_userdata('Country');
                $this->session->unset_userdata('Password');
                json_output(200,$this->other);
            }

        // } else {

        //     $this->data ='Incorrect username/password combination' ;
        //     $this->ResponseStatus=400;
        //     json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>"",'users'=>""));

        // }
        // }
        // else
        // {
        //     $this->data = 'Account does not exists';
        //     $this->ResponseStatus=400;
        //     json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>"",'users'=>""));

        // }
                  
            }
            else{
               
                json_output(400,'fail');
            }

            
     

    }




}
    ?>