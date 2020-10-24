<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreLoginController extends MY_Controller
{
    private $UserName;
    private $password;
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
        $this->load->view('common/storeLogin',$this->data);
    }
    private function _isLogin()
    {
       $this->decodeMultiUserDetails = $this->authorization_token->ValidateToken($this->session->userdata('token'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));
       if($this->decodeMultiUserDetails['status'])
       {
         $this->data=$this->Login_Model->UserMobileNumberAndCountry($this->decodeMultiUserDetails['data']->userId);
         redirect($this->data['redirection'],'refresh');
        }
    } 
    public function ajaxAction_login()
    {
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == true) {
            $this->UserName=$this->input->post('UserName');
            $this->password=$this->input->post('password');
            $this->AccountInformation = $this->Login_Model->getStoreEmployeeByUserName($this->UserName);
            if (!empty($this->AccountInformation)) {
                $this->PasswordComparison = password_verify($this->password, $this->AccountInformation['password']);
                if ($this->PasswordComparison) {
                    if ($this->AccountInformation['status'] == 'active') {
                        $this->logged_in_sess = array(
                            'storeEmployeeId'=>$this->AccountInformation['storeEmployeeId']);
                        $this->session->set_userdata(array(
                            'token' => $this->authorization_token->GenerateToken($this->logged_in_sess,$this->config->item('web_token_key'),
                            $this->config->item('web_jwt_algorithm'))));
                        $this->data='store/dashboard';
                        $this->ResponseStatus=200;
                    }
                }
                else
                {
                    $this->data= 'Incorrect username/password combination';
                    $this->ResponseStatus=400;
                }
           }
           else
           {
            $this->data= 'Incorrect username/password combination';
            $this->ResponseStatus=400;
           }
        }else{
            $this->data= 'Incorrect username/password combination';
            $this->ResponseStatus=400;  
        }
        web_json_output($this->ResponseStatus,$this->data);
   }
   public function logout()
   {
       $this->session->set_userdata('token','');
       redirect('store');
   }
}
