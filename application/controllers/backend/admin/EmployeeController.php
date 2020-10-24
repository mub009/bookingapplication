<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EmployeeController extends Admin_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Employee';
  $this->title_nav_bar = array('home' => 'admin/dashboard','employee' => 'admin/employee');
  $this->load->model('EmployeeModel');
 }
 public function index()
 {
      $this->data['title_nav_bar'] = $this->title_nav_bar;
      $this->data['title'] =  $this->title_name;
      $this->_Datatable_config();
      $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'Employee');
      $this->template('employee/employee');
 }
    public function _Datatable_config()
    {
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/employee/datatable',
                'column_name'=>array('EmployeeId','UserName','Email','Status','Actions')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addEmployee'),
                'privilege_value'=>'*',
                'link_value'=>'admin/employee/modal_addui'
            ),
            'title'=> $this->title_name
        );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
    public function ajaxAction_datatable()
    {
        $this->datatables
        ->select('adminemployee.adminEmployeeId,adminemployee.userName,adminemployee.email,adminemployee.status,0 as action')
        ->where(array('adminemployee.is_deleted' =>0))
        ->from('adminemployee');
        $config['action_config']=array(array(
            'EveryPrivilege'=>'*',
            'value'=>'EmployeeEdit',
            'privilege'=> '*',
            'link'=>'admin/employee/editform/',
            'icon'=>icon_edit,
            'action_name'=>'Edit',
            'id'=>'$1'
        ),
        array(
            'EveryPrivilege'=>'*',
            'value'=>'EmployeeView',
            'privilege'=> '*',
            'link'=>'admin/general/city/editform/',
            'icon'=>icon_delete,
            'action_name'=>'Delete',
            'id'=>'$1'
        )
    );
        $this->datatables->edit_action('action',  $config, 'adminEmployeeId');
        echo $this->datatables->generate();
    }
public function modalAction_addUI()
   {  
    $this->load->view('backend/admin/employee/Modal_InserUI', $this->data);
   }
public function post_employee()
   {  
    $this->form_validation->set_rules('employeeUserName', 'EmployeeUserName', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('Password', 'Password', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('EmployeeEmail', 'Email', 'required|valid_email');
    if ($this->form_validation->run() == true) {
       $data=array('userName'=>$this->input->post('employeeUserName'),'password'=>$this->_passwordhash($this->input->post('Password')),'email'=>$this->input->post('EmployeeEmail'));
       if($this->EmployeeModel->InsertOrUpdateEmployee($data))
       {
        web_json_output(200,array('msg'=>"Successfully Created Account"));
       }
       else {
        web_json_output(400,array('msg'=>"Wrong Value"));
       }
    }
    else
    {
        web_json_output(400,array('msg'=>$this->form_validation->error_array()));
    }
 }
 public function editAction()
 {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('adminEmployeeId', 'adminEmployeeId', 'required');
    if ($this->form_validation->run() == true) {
             $EmployeeDetails = array('adminEmployeeId'=>$this->input->post('adminEmployeeId'),'email' => $this->input->post('email'),'lastUpdatedDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
             if($this->EmployeeModel->InsertOrUpdateEmployee($EmployeeDetails,$is_update=true))
             {
              web_json_output(200,array('msg'=>"Update Successfully"));
             }
             else {
              web_json_output(400,array('msg'=>"Wrong Value"));
             }
         } else {
             web_json_output(400,array('msg'=>"Wrong Value"));
         }
 }
 public function employeeUserNameValidation()
   {
    if ($this->EmployeeModel->is_availableAdminEmployeeByUserName($this->input->get('employeeUserName'))) {
        echo json_encode(FALSE);
    }
    else {
        echo json_encode(TRUE);
    }
   }
   public function editFormByModal($adminEmployeeId)
   {
     $this->data['view'] =  $this->EmployeeModel->getAdminEmployeeDetailsByAdminEmployeeId($adminEmployeeId);
     $this->load->view('backend/admin/employee/Modal_UpdateUI', $this->data);
   }
   
}
