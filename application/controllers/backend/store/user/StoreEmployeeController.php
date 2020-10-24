<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreEmployeeController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Store Employee';
  $this->title_nav_bar = array('home' => 'admin/employee');
  $this->load->model('StoreModel');
 }
 public function index()
 {
      $this->data['title_nav_bar'] = $this->title_nav_bar;
      $this->data['title'] =  $this->title_name;
      $this->_Datatable_config();
      $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'Store Employee');
      $this->template('user/storeEmployee/employee');
 }
public function _Datatable_config()
    {
        $config=array(
            'datatable'=>array(
                'json_url'=>'store/user/employee/datatable',
                'column_name'=>array('storeEmployeeId','UserName','Email','Status','action')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addEmployee'),
                'privilege_value'=>'*',
                'link_value'=>'store/user/employee/addui'
            ),
            'title'=> $this->title_name
        );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
    public function ajaxAction_datatable()
    {
        $this->datatables
        ->select('storemployee.storeEmployeeId,storemployee.userName,storemployee.email,storemployee.status,0 as action')
        ->where(array('storemployee.is_deleted'=>0,'storemployee.storeId'=>$this->data['userInfo']['storeId'],'storemployee.role'=>'employee'))
        ->from('storemployee');
        $config['action_config']=array(array(
            'EveryPrivilege'=>'*',
            'value'=>'storeEmployeeEdit',
            'privilege'=> '*',
            'link'=>'store/user/employee/editform/',
            'icon'=>icon_edit,
            'action_name'=>'Edit',
            'id'=>'$1'
        ),
        array(
            'EveryPrivilege'=>'*',
            'value'=>'storeEmployeeView',
            'privilege'=> '*',
            'link'=>'store/user/employee/editform/',
            'icon'=>icon_delete,
            'action_name'=>'Delete',
            'id'=>'$1'
        )
    );
        $this->datatables->edit_action('action',$config,'storeEmployeeId');
        echo $this->datatables->generate();
    }
public function addUI()
   {  
     $this->load->view('backend/store/user/storeEmployee/Modal_InserUI');
   }
public function editUI($storeEmployeeId)
   {  
     $this->data['view']=$this->StoreModel->getStoreEmployeeDetailsByStoreEmployeeId($storeEmployeeId);
     $this->load->view('backend/store/user/storeEmployee/modal_updateUI', $this->data);
   }
public function post_employee()
   {  
    $this->form_validation->set_rules('employeeUserName', 'employeeUserName', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('employeeEmail', 'Email', 'required|valid_email');
    if ($this->form_validation->run() == true) {
       $data=array(
           'storeId'=>$this->data['userInfo']['storeId'],
           'password'=>$this->_passwordhash($this->input->post('password')),
           'email'=>$this->input->post('employeeEmail'),
           'userName'=>$this->input->post('employeeUserName'),
           'role'=>'employee',
           'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
       if($this->StoreModel->InsertOrUpdateStoreEmployee($data))
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
    $this->form_validation->set_rules('employeeEmail', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('storeEmployeeId', 'storeEmployeeId', 'required|regex_match[/^[0-9]+$/]');
   if ($this->form_validation->run() == true) {
       $data=array(
           'email'=>$this->input->post('employeeEmail'),
           'storeEmployeeId'=>$this->input->post('storeEmployeeId'));
       if($this->StoreModel->InsertOrUpdateStoreEmployee($data,$is_update=true))
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
 public function employeeUserNameValidation()
   {
    if ($this->StoreModel->is_availableStoreEmployeeByUserName($this->input->get('employeeUserName'))) {
        echo json_encode(FALSE);
    }
    else {
        echo json_encode(TRUE);
    }  
 }
}
