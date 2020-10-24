<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreController extends Admin_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
    {
        parent::__construct();
        $this->title_name = 'Store';
        $this->title_nav_bar = array('home' => 'admin/dashboard','store'=>'admin/store');
        $this->load->model('StoreModel');
        $this->load->model('GeneralModel');
    }
 public function index()
 {
      $this->data['title_nav_bar'] = $this->title_nav_bar;
      $this->data['title'] =  $this->title_name;
      $this->_Datatable_config();
      $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'Employee');
      $this->template('store/store');
 }
 public function _Datatable_config()
    {
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/store/datatable',
                'column_name'=>array('storeId','storeName','email','Status','action')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addEmployee'),
                'privilege_value'=>'*',
                'link_value'=>'', //admin/store/modal_addui
                'link'=>'link'
            ),
            'title'=> $this->title_name
        );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
  public function ajaxAction_datatable()
    {
        $this->datatables
        ->select('store.storeId,store.storeName,store.email,store.status,0 as action')
        ->where(array('store.is_deleted' =>0))
        ->from('store');
        $config['action_config']=array(array(
            'EveryPrivilege'=>'*',
            'value'=>'StoreView',
            'privilege'=> '*',
            'link'=>'admin/store/editform/',
            'link_mode'=>true,
            'icon'=>icon_edit,
            'action_name'=>'Edit',
            'id'=>'$1'
            )
    );
        $this->datatables->edit_action('action',  $config, 'storeId');
        echo $this->datatables->generate();
    }
public function addUI()
   {  
    $this->data['country']=$this->GeneralModel->getCountryList();
    $this->template('store/inserUI');
   }
public function editUI($storeId)
   {  
    $this->data['view']=$this->StoreModel->getStoreDetailsByStoreId($storeId);
    $this->data['country']=$this->GeneralModel->getCountryList();
    $this->data['state']=$this->GeneralModel->getStateListByCountryId($this->data['view']['countryId']);
    $this->data['city']=$this->GeneralModel->getCityListByStateId($this->data['view']['stateId']);
    $this->data['area']=$this->GeneralModel->getAreaListByCityId($this->data['view']['cityId']);
    $this->template('store/updateUI');
   }

   public function post_store()
   {  
    $this->form_validation->set_rules('storeName', 'storeName', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('storeTelephone', 'storeTelephone', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
    $this->form_validation->set_rules('latitude', 'latitude', 'required');
    $this->form_validation->set_rules('longitude', 'longitude', 'required');
    $this->form_validation->set_rules('contact1', 'contact1', 'required');
    $this->form_validation->set_rules('contact2', 'contact2', 'required');
    $this->form_validation->set_rules('storeAddress', 'storeAddress', 'required');
    $this->form_validation->set_rules('countryId', 'countryId', 'required');
    $this->form_validation->set_rules('stateId', 'stateId', 'required');
    $this->form_validation->set_rules('cityId', 'cityId', 'required');
    $this->form_validation->set_rules('storeEmail', 'storeEmail', 'required');
    $this->form_validation->set_rules('employeeUserName', 'employeeUserName', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('employeeEmail', 'employeeEmail', 'required');
   if ($this->form_validation->run() == true) {
       $data=array('storeName'=>$this->input->post('storeName'),'contact1'=>$this->input->post('contact1'),'contact2'=>$this->input->post('contact2'),'longitude'=>$this->input->post('longitude'),'latitude'=>$this->input->post('latitude'),'storeTelephone'=>$this->input->post('storeTelephone'),'storeAddress'=>$this->input->post('storeAddress'),'countryId'=>$this->input->post('countryId'),'stateId'=>$this->input->post('stateId'),'cityId'=>$this->input->post('cityId'),'areaId'=>$this->input->post('areaId'),'email'=>$this->input->post('storeEmail'),'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'userName'=>$this->input->post('employeeUserName'),'password'=>$this->_passwordhash($this->input->post('password')),'employeeEmail'=>$this->input->post('employeeEmail'));
       if($this->StoreModel->InsertStoreWithEmployee($data))
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
  $this->form_validation->set_rules('storeName', 'storeName', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
  $this->form_validation->set_rules('storeTelephone', 'storeTelephone', 'required|regex_match[/^[0-9 + a-z A-Z]+$/]');
  $this->form_validation->set_rules('latitude', 'latitude', 'required');
  $this->form_validation->set_rules('longitude', 'longitude', 'required');
  $this->form_validation->set_rules('contact1', 'contact1', 'required');
  $this->form_validation->set_rules('contact2', 'contact2', 'required');
  $this->form_validation->set_rules('storeAddress', 'storeAddress', 'required');
  $this->form_validation->set_rules('countryId', 'countryId', 'required');
  $this->form_validation->set_rules('stateId', 'stateId', 'required');
  $this->form_validation->set_rules('cityId', 'cityId', 'required');
  $this->form_validation->set_rules('storeId', 'storeId', 'required');
 if ($this->form_validation->run() == true) {
     $data=array('storeId'=>$this->input->post('storeId'),'storeName'=>$this->input->post('storeName'),'contact1'=>$this->input->post('contact1'),'contact2'=>$this->input->post('contact2'),'longitude'=>$this->input->post('longitude'),'latitude'=>$this->input->post('latitude'),'storeTelephone'=>$this->input->post('storeTelephone'),'storeAddress'=>$this->input->post('storeAddress'),'countryId'=>$this->input->post('countryId'),'stateId'=>$this->input->post('stateId'),'cityId'=>$this->input->post('cityId'),'areaId'=>$this->input->post('areaId'),'email'=>$this->input->post('storeEmail'),'lastUpdatedDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'updatedByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
     if($this->StoreModel->UpdateOrInsertStore($data,true))
     {
      web_json_output(200,array('msg'=>"Successfully Created"));
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

}
