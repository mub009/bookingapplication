<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
     /**
     * Set const value in  tbl_vendor;
     * @var string const 
     */
    public $data=array();
    private $is_multiuser;
    private $MultiUser;
    private $AccountInformation;
    private $PasswordComparison;
    private $logged_in_sess;
    private $ResponseStatus;
    private $decodeMultiUserDetails;
    private $UserLastUsedPage;
    public function __construct()
    {
      parent::__construct();
      $this->load->model("Login_Model");
    }

    public function index()
    {
        
        $this->_isLogin();
       // $this->data['mobilenumberdigits']=$this->Base_Model->query("SELECT TotalMobileNumberDigits FROM `tbl_country` join tbl_user_type on tbl_country.Id=tbl_user_type.CountryId",'row_array'); 
        $this->load->view('common/login',$this->data);
    }

    private function _isLogin()
    {

       $this->decodeMultiUserDetails = $this->authorization_token->ValidateToken($this->session->userdata('token'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));

       if($this->decodeMultiUserDetails['status'])
       {

         $this->data=$this->Login_Modal->UserMobileNumberAndCountry($this->decodeMultiUserDetails['data']->userId);
       
         redirect($this->data['redirection'],'refresh');
         
        }
      
    } 

    public function logout()
    {

        $this->session->set_userdata('multiuser','');

        $this->session->set_userdata('token','');

        redirect('common/login');

    }


    public function action()
    {

        $this->form_validation->set_rules('MobileNo', 'MobileNo', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');

    
  
        if ($this->form_validation->run() == true) {

            $this->AccountInformation = $this->Login_Modal->login($this->input->post('MobileNo'),$this->input->post('country_name'));

            
        
            if ($this->AccountInformation == true) {

                $this->PasswordComparison = password_verify($this->input->post('password'), $this->AccountInformation['Password']);
                
                if ($this->PasswordComparison) {


                    if ($this->AccountInformation['StatusId'] == 1) {

                        if ($this->AccountInformation['OtpVerification'] == 1) {

                        $this->logged_in_sess = array('userId'=>$this->AccountInformation['UserId']);

                        $this->MultiUser=$this->Login_Modal->MultiUser($this->input->post('MobileNo'),$this->input->post('country_name'));

                        $this->session->set_userdata('multiuser','');

                        $this->session->set_userdata('token','');
                        
                        if(count($this->MultiUser)>1)
                        {
                            $this->is_multiuser=true;

                            $this->session->set_userdata(array('multiuser' => $this->authorization_token->GenerateToken($this->logged_in_sess,$this->config->item('multi_user_web_token_key'),$this->config->item('web_jwt_algorithm'))),array('token' => $this->authorization_token->GenerateToken($this->logged_in_sess,$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'))));

                            $this->session->set_userdata('Username',$this->input->post('MobileNo'));

                            $this->session->set_userdata('Password',$this->input->post('password'));

                            $this->session->set_userdata('Country',$this->input->post('country_name'));
                        }
                        else
                        {
                            $this->is_multiuser=false;

                            $this->session->set_userdata(array('token' => $this->authorization_token->GenerateToken($this->logged_in_sess,$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'))));

                        }

                    $this->UserLastUsedPage=$this->input->post('lastUsedUrl');
          
                      if($this->UserLastUsedPage)
                      {

                        $this->data=$this->UserLastUsedPage;

                        $this->ResponseStatus=100;

                      }
                      else
                        {

                        if ($this->AccountInformation['UserTypeId'] == 11) {
                            
                            $this->data='backend/admin/dashboard';

                            $this->ResponseStatus=200;

                        } elseif ($this->AccountInformation['UserTypeId'] == 22) {

                            $this->data='backend/dealer/dashboard';
                            
                            $this->ResponseStatus=200;

                        } elseif ($this->AccountInformation['UserTypeId'] == 44) {

                            $this->data='backend/vendor/dashboard';
                            $this->ResponseStatus=200;

                        } elseif ($this->AccountInformation['UserTypeId'] == 88) {
                            $this->data='backend/admin/dashboard';
                            $this->ResponseStatus=200;
                        }
                          elseif ($this->AccountInformation['UserTypeId'] == 99) {
                            $this->data='backend/company/dashboard';
                            $this->ResponseStatus=200;
                        }
                        elseif ($this->AccountInformation['UserTypeId'] == 111) {
                        
                            $this->ResponseStatus=200;
                            $this->data='backend/programmer/dashboard';
                        }
                        else{
                            $this->data='No Backend User';
                            $this->ResponseStatus=400;

                        }
                    }
                }
                else
                {
                    $this->data= 'OTP Verification is Pending, Please login to your mobile to verify the OTP';
                    $this->ResponseStatus=400;
                }

                    } else {

                        if ($this->AccountInformation['StatusId'] == 2) {

                            $this->data= 'Your Account is Pending';
                            $this->ResponseStatus=400;

                        } elseif ($this->AccountInformation['StatusId'] == 3) {

                            $this->data = 'Your Account was Deleted';
                            $this->ResponseStatus=400;


                      
                        } elseif ($this->AccountInformation['StatusId'] == 4) {

                            $this->data = 'Your Account has been Blocked';
                            $this->ResponseStatus=400;


                        } elseif ($this->AccountInformation['OtpVerification'] == '2') {
                            $this->data = 'Please Active Your Account';
                            $this->ResponseStatus=400;


                        }
                    }

                } else {

                    $this->data ='Incorrect username/password combination' ;
                    $this->ResponseStatus=400;
                   
                }
            } else {

                $this->data = 'Account does not exists';
                $this->ResponseStatus=400;
        } 

    }
    else
    {
        $this->data = 'Incorrect username/password combination';
        $this->ResponseStatus=400;
    }
    
    if($this->is_multiuser)
    {
        json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>$this->is_multiuser,'users'=>$this->MultiUser));

    }
    else
    {
        json_output($this->ResponseStatus, array('msg'=>$this->data,'is_multiuser'=>$this->is_multiuser,'users'=>$this->MultiUser));

    }

 }
}
