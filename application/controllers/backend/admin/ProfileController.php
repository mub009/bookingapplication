<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProfileController extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }
    public function withOutCSRF__index()
    {
        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard');
        $this->data['title'] = 'Profile';
        $this->template('profile', $this->data);  
    }
    public function updatePersonalInfo()
    {
        $this->form_validation->set_rules('firstName', 'FirstName', 'required|regex_match[/^[a-z A-Z . , ]+$/]');
        $this->form_validation->set_rules('lastName', 'LastName', 'required|regex_match[/^[0-9 a-z A-Z . , ]+$/]');
        $this->form_validation->set_rules('mobileNumber', 'Mobile Number', 'required|regex_match[/^[0-9 +]+$/]');
        $this->form_validation->set_rules('interests', 'Interests', 'required|regex_match[/^[0-9 a-z A-Z . , ,]+$/]');
        $this->form_validation->set_rules('occupation', 'Occupation', 'required|regex_match[/^[0-9 a-z A-Z . , ]+$/]');
        $this->form_validation->set_rules('about', 'About', 'required|regex_match[/^[a-z A-Z . , ]+$/]');
        if ($this->form_validation->run() == true) {
            $employeeDetails = array(
                'firstName'    => $this->input->post('firstName'),
                'lastName'     => $this->input->post('lastName'),
                'mobileNumber' => $this->input->post('mobileNumber'),
                'interests'    => $this->input->post('interests'),
                'occupation'   => $this->input->post('occupation'),
                'about'        => $this->input->post('about'),
                'websiteUrl'   => $this->input->post('websiteUrl'),
                'adminEmployeeId'=>$this->data['userInfo']['adminEmployeeId'],
            );
            if($this->EmployeeModel->InsertOrUpdateEmployee($employeeDetails,true)) {
                web_json_output(200,array('msg'=>"Successfully Updated"));
             } else {
                 web_json_output(400,array('msg'=>"Wrong Value",'error'=>'database'));
             }
        } else {
            web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
    }
    public function oldPasswordChecking()
    {
        $adminEmployeeDetails=$this->Login_Model->getAdminEmployeeByAdminEmployeeId($this->data['userInfo']['adminEmployeeId']);
        if(!password_verify($this->input->get('oldPassword'),$adminEmployeeDetails['password']))
        {
            echo json_encode(FALSE);
        }
        else {
            echo json_encode(TRUE);
        }   
    }

public function privacyUpdate()
{   
    $this->form_validation->set_rules('is_email', 'Is email notification', 'required|regex_match[/^[0-1]+$/]');
    $this->form_validation->set_rules('is_sms', 'Is SMS notification', 'required|regex_match[/^[0-1]+$/]');
    if ($this->form_validation->run() == true) {
      $is_email=$this->input->post('is_email');
      $is_sms=$this->input->post('is_sms');
      $passwordChangeDetails= array(
        'is_emailNotification'=>$is_email,
        'is_SMSNotification'=>$is_sms,
        'adminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
       if($this->EmployeeModel->InsertOrUpdateEmployee($passwordChangeDetails,true)) {
           web_json_output(200,array('msg'=>"Successfully Updated"));
        } else {
            web_json_output(400,array('msg'=>"Wrong Value",'error'=>'database'));
        }
    }else
    {
        web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
    }
}
public function changePassword()
    {
        $this->form_validation->set_rules('oldPassword', 'Current Password', 'required');
        $this->form_validation->set_rules('newPassword', 'New Password', 'required');
        $this->form_validation->set_rules('retypePassword', 'Confirm Password', 'required|matches[newPassword]');
        if ($this->form_validation->run() == true) {
            $adminEmployeeDetails=$this->Login_Model->getAdminEmployeeByAdminEmployeeId($this->data['userInfo']['adminEmployeeId']);
            if(password_verify($this->input->post('oldPassword'),$adminEmployeeDetails['password']))
            {
                   $passwordChangeDetails= array(
                    'password'=>$this->_passwordhash($this->input->post('retypePassword')),
                    'adminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
                   if($this->EmployeeModel->InsertOrUpdateEmployee($passwordChangeDetails,true)) {
                       web_json_output(200,array('msg'=>"Successfully Updated"));
                       $this->session->set_userdata('token','');
                    } else {
                        web_json_output(400,array('msg'=>"Wrong Value",'error'=>'database'));
                    }
                web_json_output(200,array('msg'=>"Successfully Updated"));
            }
            else {
                web_json_output(400,array('msg'=>"Password Not Matched",'error'=>'Password Not matched'));
            }  
        } else {
            web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
    }
    public function changeProfilePhoto()
    {
        $this->image->ImageConfig();   
        if ($this->upload->do_upload('profilePic')) {
            $imageInformation = $this->upload->data();
            $this->image->image_cropping($imageInformation);
            $profileDetails= array(
            'adminEmployeeId'=>$this->data['userInfo']['adminEmployeeId'],
            'ProfilePic' => $imageInformation['file_name']);
           if($this->EmployeeModel->InsertOrUpdateEmployee($profileDetails,true)) {
               web_json_output(200,array('msg'=>"Successfully Updated"));
            } else {
                web_json_output(400,array('msg'=>"Wrong Value",'error'=>'database'));
            }
        } else {
            web_json_output(400,array('msg'=>"Wrong Value",'error'=>$this->upload->display_errors()));
        }
    }

}
