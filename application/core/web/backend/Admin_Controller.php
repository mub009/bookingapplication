<?php

class Admin_Controller extends MY_Controller
{
    public $data = array();
    public $userInfo=array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("EmployeeModel");
        if (empty($this->session->userdata('token'))) {
           $this->session->unset_userdata('token');
            redirect('admin');
        } else {
            $DataInfo = $this->authorization_token->ValidateToken($this->session->userdata('token'),$this->config->item('web_token_key'),$this->config->item('web_jwt_algorithm'));
            if ($DataInfo['status'] == 1) {
                $this->CurrentTimeAndDate();
                $this->data['userInfo']=$this->EmployeeModel->getAdminEmployeeDetailsByAdminEmployeeId($DataInfo['data']->adminEmployeeId);
                if($this->data['userInfo']['status']=='active'){
                } else {
                    $this->session->set_flashdata('Error', 'permission not allowed');
                    redirect('admin');
                }
            } else {
                $this->session->unset_userdata('token');
                $this->session->set_flashdata('Error', 'Expire Your Time Please Login Again');
                redirect('admin');
            }
        }
    }
    public function template($page = null)
    {
        $this->load->view('template/admin/_include/header', $this->data);
        $this->load->view('template/admin/_include/header_menu');
        $this->load->view('template/admin/_include/side_menubar', $this->data);
        $this->load->view('template/admin/_include/modal');
        $this->load->view('backend/admin/' . $page, $this->data);
        $this->load->view('template/admin/_include/footer');
        $this->load->view('template/javascript');
    }   
}
