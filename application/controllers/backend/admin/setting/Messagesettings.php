<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Message Settings
 * @author: mubashir  * @phn:+91-9633871889
 * @version: 1.0.0
 *
 *@extends:Admin_Controller
 *
 */

class Messagesettings extends Admin_Controller
{

    private $details = array();

    private $table_MessageService = 'tbl_messageservice';

    private $where = array();

    private $MessageSettingsData;

    private $is_validURL = true;

    private $URLErrorMessage=array();

    private $Input_URL;

    // private $is_SMSProtocol=false;


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->MessageSettingsData = $this->Base_Model->select($this->table_MessageService, '*', $this->where);

    }

    public function index()
    {

        $this->data['note']=$this->note->design("Make sure the url format is correct in below format before going to user id row. The url should have protocols like http:// ..etc ,  mobilenumber{} after mobilenumber =, message{} after message= <br><br> <h4>Example:-</h4> &nbsp&nbsp http://exampledomain.com/bulksms?username=demo&password=demo&type=0&dlr=1&mobilenumber=mobilenumber{}&message=message{}");

        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard','Message Settings'=>'backend/admin/setting/messagesettings/index');

        $this->data['MessageSettingsData'] = $this->MessageSettingsData;

        $this->template('setting/message_settings', $this->data);

    }

    public function settingUpdate()
    {

        $this->form_validation->set_rules('is_otp', 'is_otp', 'trim|required');

        $this->form_validation->set_rules('is_order', 'is_order', 'trim|required');

        if ($this->form_validation->run() == true) {

            $this->details = array('is_OTP' => ($this->input->post('is_otp') == 'true') ? 1 : 0, 'is_order' => ($this->input->post('is_order') == 'true') ? 1 : 0, 'is_messageService' => 1, 'CountryAdminUserTypeId' => $this->data['user_id']);

            $this->where = array('CountryAdminUserTypeId' => $this->data['user_id']);

            if ($this->MessageSettingsData) {
                $this->Base_Model->update($this->table_MessageService, $this->where, $this->details);
            } else {
                $this->Base_Model->insert($this->table_MessageService, $this->details);

            }

            json_output(200, 'success');

        } else {

            json_output(400, $this->form_validation->error_array());

        }

    }

    public function configUpdate()
    {


        // $this->form_validation->set_rules('username', 'username', 'trim|required');

        // $this->form_validation->set_rules('password', 'password', 'trim|required');

        $this->form_validation->set_rules('url', 'url', 'trim|required');

        if ($this->form_validation->run() == true) {

            $this->Input_URL = $this->input->post('url');

            if ($this->_URLValidation($this->Input_URL)) {

                $this->details = array('url' => $this->Input_URL,'CountryId'=>$this->data['userinfo']['CountryId']);

                $this->where = array('CountryAdminUserTypeId' => $this->data['user_id']);

                if ($this->MessageSettingsData) {
                    $this->Base_Model->update($this->table_MessageService, $this->where, $this->details);
                } else {
                    $this->Base_Model->insert($this->table_MessageService, $this->details);
                }

                json_output(200, 'success');
            } else {
                json_output(400, array('url' => $this->URLErrorMessage));
            }

        } else {
            json_output(400, $this->form_validation->error_array());

        }

    }


    private function _URLValidation($url)
    {
       

        // if (!strpos($url, "http://")) {
 
        //     echo 'ss';
        //     array_push($this->URLErrorMessage,array('invalid Protocol'));

        //     $this->is_validURL = false;

        // }
        // else
        // {
        //     $this->is_SMSProtocol=true;
        // } 
        
        // if (!strpos($url, 'https://')) {
            
        //     array_push($this->URLErrorMessage,array('invalid Protocol'));

        //     $this->is_validURL = false;
        // }
        // else
        // {
        //     $this->is_SMSProtocol=true;
        // }


        // if($this->is_SMSProtocol)
        // {
        //     $this->is_validURL=true;
        // }

      
        // if (!strpos($url, 'username{}')) {

            
        //     array_push($this->URLErrorMessage,array('invalid username{}'));

        //     $this->is_validURL = false;
        // }

        // if (!strpos($url, 'password{}')) {

        //     array_push($this->URLErrorMessage,array('invalid password{}'));

        //     $this->is_validURL = false;
        // }

        if (!strpos($url, 'mobilenumber{}')) {

            array_push($this->URLErrorMessage,array('invalid mobilenumber{}'));

            $this->is_validURL = false;
        }

        if (!strpos($url, 'message{}')) {

            array_push($this->URLErrorMessage,array('invalid message{}'));
                
            $this->is_validURL = false;
        }

        return $this->is_validURL;
    }

}
