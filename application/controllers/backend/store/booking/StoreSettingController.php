<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreSettingController extends Store_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StoreModel');
    }
    public function index()
    {
        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard','Settings'=>'admin/setting');
        $this->data['locationList']=$this->StoreModel->getStoreLocationListByStoreId($this->data['userInfo']['storeId']);
        $this->template('booking/storesettings/settings', $this->data);
    }
    public function settingsAction()
    {
        $this->form_validation->set_rules('minutes', 'minutes', 'required');
        $this->form_validation->set_rules('hour', 'hour', 'required');
        $this->form_validation->set_rules('days', 'days', 'required');
        if ($this->form_validation->run() == true) {
          $data=array(
                'is_duration'=>($this->input->post('is_duration')==1)?1:0,
                'lockInMinutes'=>$this->input->post('minutes'),
                'lockInHour'=>$this->input->post('hour'),
                'lockInDays'=>$this->input->post('days'),
                'storeId'=>$this->data['userInfo']['storeId']);
            
            if($this->StoreModel->UpdateOrInsertStore($data,true))
                { 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }
                else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                } 
            }else
            {
              web_json_output(400,array('msg'=>"Wrong Value"));
            }
    }
    public function addLocationUI()
    {
        $this->load->view('backend/store/booking/storesettings/locationAddUI',$this->data);
    }
    public function editLocationUI($storeLocationId)
    {
        $this->data['view']=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$storeLocationId);
        $this->load->view('backend/store/booking/storesettings/locationEditUI',$this->data);
    }
    public function locationTimeUI($storeLocationId)
    {
        $this->data['view']=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$storeLocationId);
        $this->template('booking/storesettings/storeTime', $this->data);
    }
    public function timeUpdateAction()
    {
        $this->form_validation->set_rules('workingtimes', 'workingtimes', 'required');
        $this->form_validation->set_rules('storeLocationId', 'storeLocationId', 'required');
        if ($this->form_validation->run() == true) {
         $details=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$this->input->post('storeLocationId'));
         $data=array(
                'workingtimes'=>$this->input->post('workingtimes'),
                'storeLocationId'=>$details['storeLocationId']);
            if($this->StoreModel->insertOrUpdateStoreLocation($data,true))
                { 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }
                else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                } 
            }else
            {
              web_json_output(400,array('msg'=>"Wrong Value1"));
            }
    }
    public function deleteLocationUI($storeLocationId)
    {
        $this->data['view']=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$storeLocationId);
        $this->load->view('backend/store/booking/storesettings/locationDelete',$this->data);
    }
    public function actionAddLocation()
    {
        $this->form_validation->set_rules('locationName_ar', 'minutes', 'required');
        $this->form_validation->set_rules('locationName_en', 'hour', 'required');
        if ($this->form_validation->run() == true) {
         $data=array(
                'storeId'=>$this->data['userInfo']['storeId'],
                'locationName_en'=>$this->input->post('locationName_en'),
                'locationName_ar'=>$this->input->post('locationName_ar'),
                'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']
            );
            if($this->StoreModel->insertOrUpdateStoreLocation($data)){ 
                $this->StoreModel->multiLocationByStoreId($this->data['userInfo']['storeId']);
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                } 
            }else{
              web_json_output(400,array('msg'=>"Wrong Value"));
            }  
    }
    public function actionEditLocation()
    {
        $this->form_validation->set_rules('locationName_ar', 'locationName_ar', 'required');
        $this->form_validation->set_rules('locationName_en', 'locationName_en', 'required');
        $this->form_validation->set_rules('storeLocationId', 'storeLocationId', 'required');
        if ($this->form_validation->run() == true) {
         $StoreLocationDetails=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$this->input->post('storeLocationId'));
         $data=array(
                'locationName_en'=>$this->input->post('locationName_en'),
                'locationName_ar'=>$this->input->post('locationName_ar'),
                'storeLocationId'=>$StoreLocationDetails['storeLocationId']);
            if($this->StoreModel->insertOrUpdateStoreLocation($data,true)){ 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                } 
            }else{
              web_json_output(400,array('msg'=>"Wrong Value",'msg'=>$this->form_validation->error_array()));
            }  
    }
    public function actionDeleteLocation()
    {
        $this->form_validation->set_rules('storeLocationId', 'storeLocationId', 'required');
        if ($this->form_validation->run() == true) {
         $StoreLocationDetails=$this->StoreModel->decryptGetStoreLocationDetails($this->data['userInfo']['storeId'],$this->input->post('storeLocationId'));
         $data=array(
                'is_deleted'=>1,
                'storeLocationId'=>$StoreLocationDetails['storeLocationId'],
                'storeId'=>$this->data['userInfo']['storeId']);
            if($this->StoreModel->insertOrUpdateStoreLocation($data,true)){ 
                $this->StoreModel->multiLocationByStoreId($this->data['userInfo']['storeId']);
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                } 
            }else{
              web_json_output(400,array('msg'=>"Wrong Value"));
            }    
    }
}
