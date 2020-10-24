<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreEmployeeController extends Admin_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Store Employee';
  $this->title_nav_bar = array('home' => 'admin/dashboard','store'=>'admin/store/employee','employee'=>'admin/store/employee');
  $this->load->model('StoreModel');
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
                'json_url'=>'admin/store/employee/datatable',
                'column_name'=>array('storeEmployeeId','storeName','UserName','Email','Status','action')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addEmployee'),
                'privilege_value'=>'*',
                'link_value'=>'admin/store/employee/addui'
            ),
            'title'=> $this->title_name
        );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
    public function ajaxAction_datatable()
    {
        $this->datatables
        ->select('storemployee.storeEmployeeId,store.storeName,storemployee.userName,storemployee.email,storemployee.status,0 as action')
        ->join('store','store.storeId=storemployee.storeId')
        ->where(array('storemployee.is_deleted'=>0))
        ->from('storemployee');
        $config['action_config']=array(array(
            'EveryPrivilege'=>'*',
            'value'=>'storeEmployeeEdit',
            'privilege'=> '*',
            'link'=>'admin/store/employee/editform/',
            'icon'=>icon_edit,
            'action_name'=>'Edit',
            'id'=>'$1'
        ),
        array(
            'EveryPrivilege'=>'*',
            'value'=>'storeEmployeeEdit',
            'privilege'=> '*',
            'link'=>'admin/store/employee/passwordchange/',
            'icon'=>icon_edit,
            'action_name'=>'Password',
            'id'=>'$1'
        )
    );
        $this->datatables->edit_action('action',$config,'storeEmployeeId');
        echo $this->datatables->generate();
    }
public function addUI()
   {  
     $this->data['store']=$this->StoreModel->getStoreList();
     $this->load->view('backend/admin/store/storeEmployee/Modal_InserUI', $this->data);
   }
public function editUI($storeEmployeeId)
   {  
     $this->data['store']=$this->StoreModel->getStoreList();
     $this->data['view']=$this->StoreModel->getStoreEmployeeDetailsByStoreEmployeeId($storeEmployeeId);
     $this->load->view('backend/admin/store/storeEmployee/modal_updateUI', $this->data);
   }
public function post_employee()
   {  
    $this->form_validation->set_rules('employeeUserName', 'employeeUserName', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('employeeEmail', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('storeId', 'storeId', 'required|regex_match[/^[0-9]+$/]');
    if ($this->form_validation->run() == true) {
       $data=array('storeId'=>$this->input->post('storeId'),'password'=>$this->_passwordhash($this->input->post('password')),'email'=>$this->input->post('employeeEmail'),'userName'=>$this->input->post('employeeUserName'),'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
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
    $this->form_validation->set_rules('storeId', 'storeId', 'required|regex_match[/^[0-9]+$/]');
    $this->form_validation->set_rules('storeEmployeeId', 'storeEmployeeId', 'required|regex_match[/^[0-9]+$/]');
   if ($this->form_validation->run() == true) {
       $data=array('email'=>$this->input->post('employeeEmail'),'storeId'=>$this->input->post('storeId'),'storeEmployeeId'=>$this->input->post('storeEmployeeId'));
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
 public function passwordAction()
   {  
    $this->form_validation->set_rules('storeEmployeeId', 'employeeUserName', 'required|regex_match[/^[0-9]+$/]');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == true) {
       $data=array(
           'storeEmployeeId'=>$this->input->post('storeEmployeeId'),
           'password'=>$this->_passwordhash($this->input->post('password')),
          );
       if($this->StoreModel->InsertOrUpdateStoreEmployee($data,true))
       {
        web_json_output(200,array('msg'=>"Successfully Change Password"));
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
 public function passwordChange($storeEmployeeId)
 {  
   $this->data['view']=$this->StoreModel->getStoreEmployeeDetailsByStoreEmployeeId($storeEmployeeId);
   $this->load->view('backend/admin/store/storeEmployee/modal_passwordChange', $this->data);
 }
}
