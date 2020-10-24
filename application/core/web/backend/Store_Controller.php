<?php

class Store_Controller extends MY_Controller
{
    public $data = array();
    public $userInfo=array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("StoreModel");
        if (empty($this->session->userdata('token'))) {
           $this->session->unset_userdata('token');
            redirect('store');
        } else {
            $DataInfo = $this->authorization_token->ValidateToken($this->session->userdata('token'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));
            if ($DataInfo['status'] == 1) {
                $this->CurrentTimeAndDate();
                $this->data['userInfo']=$this->StoreModel->getStoreEmployeeByStoreEmployeeId($DataInfo['data']->storeEmployeeId);
                if($this->data['userInfo']['status']=='active'){
                } else {
                    $this->session->set_flashdata('Error', 'permission not allowed');
                    redirect('store');
                }
            } else {
                $this->session->unset_userdata('token');
                $this->session->set_flashdata('Error', 'Expire Your Time Please Login Again');
                redirect('store');
            }
        }
    }
    public function template($page = null)
    {
        $this->load->view('template/store/_include/header', $this->data);
if($this->data['userInfo']['type']=="ecommerce"){
    $this->load->view('template/store/_include/ecommerce_header_menu.php');
}elseif($this->data['userInfo']['type']=="booking"){
    $this->load->view('template/store/_include/booking_header_menu.php');
}
        $this->load->view('template/store/_include/side_menubar', $this->data);
        $this->load->view('template/store/_include/modal');
        $this->load->view('backend/store/' . $page, $this->data);
        $this->load->view('template/store/_include/footer');
        $this->load->view('template/javascript');

    }   
    public function templateLayout($page = null)
    {
        $this->load->view('template/store/_include/header', $this->data);
        $this->load->view('template/store/_include/header_menu');
        $this->load->view('template/store/_include/side_menubar', $this->data);
        $this->load->view('template/store/_include/modal');
        $this->load->view('backend/store/' .$this->data['pagePath']. $page, $this->data);
        $this->load->view('template/store/_include/footer');
       
    }
}
