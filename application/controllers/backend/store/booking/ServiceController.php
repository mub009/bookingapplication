<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ServiceController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
  public function __construct()
  {
    parent::__construct();
    $this->title_name = 'Layout';
    $this->title_nav_bar = array('home' => 'admin/layout');
    $this->load->model('StoreModel');
  }
  public function index()
  {
    $this->data['service']=$this->StoreModel->getServiceByStoreId($this->data['userInfo']['storeId']);
    $this->template('booking/service/service',$this->data);
  }
  public function withOutCSRF_addUI()
  {
    $this->data['select2']=true;
    $this->data['storProviderList']=$this->StoreModel->getStorProviderListByStoreId($this->data['userInfo']['storeId']);
    $this->data['storeCategory']=$this->StoreModel->getCategoriesByShopId($this->data['userInfo']['storeId']);
    $this->template('booking/service/serviceAdd');
  }
  public function withOutCSRF_editUI($storeServiceId)
  {
    $this->data['view']=$this->StoreModel->serviceDecrypt($this->data['userInfo']['storeId'],$storeServiceId);
     $this->data['storProviderList']=$this->StoreModel->getStorProviderListWithAssignStoreServiceByStoreIdWith($this->data['userInfo']['storeId'],$storeServiceId);
     $this->data['storeCategory']=$this->StoreModel->getCategoriesByShopId($this->data['userInfo']['storeId']);
     $this->template('booking/service/serviceEdit',$this->data);
  }
  public function editAction()
  {
    $this->form_validation->set_rules('serviceName_english', 'ServiceName english', 'required');
    $this->form_validation->set_rules('serviceName_arabic', 'ServiceName arabic', 'required');
    $this->form_validation->set_rules('serviceDescription_en', 'Service Description_en', 'required');
    $this->form_validation->set_rules('serviceDescription_ar', 'Service Description_ar', 'required');
    $this->form_validation->set_rules('cost', 'cost', 'required');
    $this->form_validation->set_rules('duration', 'duration', 'required');
    $this->form_validation->set_rules('storeCategoryId', 'storeCategoryId', 'required');
    if ($this->form_validation->run() == true) {
      if(!empty($_FILES['image']['name']))
      {
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'serviceName_en'=>$this->input->post('serviceName_english'),
            'serviceName_ar'=>$this->input->post('serviceName_arabic'),
            'serviceDescription_en'=>$this->input->post('serviceDescription_en'),
            'serviceDescription_ar'=>$this->input->post('serviceDescription_ar'),
            'cost'=>$this->input->post('cost'),
            'duration'=>$this->input->post('duration'),
            'storeServiceCategoriesId'=>$this->input->post('storeCategoryId'),
            'img'=>$imageInformation['file_name'],
            'storeId'=>$this->data['userInfo']['storeId']);
            if($storeServiceId=$this->StoreModel->InsertOrUpdateStoreService($data,TRUE))
            { 
            $this->StoreModel->addStoreServicesEmployee($storeServiceId,$this->input->post('serviceProviderEmployeeId'));
            web_json_output(200,array('msg'=>"Successfully Added"));
            }
            else {
            web_json_output(400,array('msg'=>"Wrong Value"));
            }  
          }
        }
        else
        {
          $data=array(
            'serviceName_en'=>$this->input->post('serviceName_english'),
            'serviceName_ar'=>$this->input->post('serviceName_arabic'),
            'serviceDescription_en'=>$this->input->post('serviceDescription_en'),
            'serviceDescription_ar'=>$this->input->post('serviceDescription_ar'),
            'cost'=>$this->input->post('cost'),
            'duration'=>$this->input->post('duration'),
            'storeServiceCategoriesId'=>$this->input->post('storeCategoryId'),
            'storeId'=>$this->data['userInfo']['storeId']);
            if($storeServiceId=$this->StoreModel->InsertOrUpdateStoreService($data,TRUE))
            { 
              $this->StoreModel->addStoreServicesEmployee($storeServiceId,$this->input->post('serviceProviderEmployeeId'));
              web_json_output(200,array('msg'=>"Successfully Added"));
            }
            else {
               web_json_output(400,array('msg'=>"Wrong Value"));
            }   
        }
      }
      else
        {
          web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
  }
  public function addAction()
  {
    $this->form_validation->set_rules('serviceName_english', 'ServiceName english', 'required');
    $this->form_validation->set_rules('serviceName_arabic', 'ServiceName arabic', 'required');
    $this->form_validation->set_rules('serviceDescription_en', 'Service Description_en', 'required');
    $this->form_validation->set_rules('serviceDescription_ar', 'Service Description_ar', 'required');
    $this->form_validation->set_rules('cost', 'cost', 'required');
    $this->form_validation->set_rules('duration', 'duration', 'required');
    $this->form_validation->set_rules('storeCategoryId', 'storeCategoryId', 'required');
    if ($this->form_validation->run() == true) {
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'serviceName_en'=>$this->input->post('serviceName_english'),
            'serviceName_ar'=>$this->input->post('serviceName_arabic'),
            'serviceDescription_en'=>$this->input->post('serviceDescription_en'),
            'serviceDescription_ar'=>$this->input->post('serviceDescription_ar'),
            'cost'=>$this->input->post('cost'),
            'duration'=>$this->input->post('duration'),
            'storeServiceCategoriesId'=>$this->input->post('storeCategoryId'),
            'img'=>$imageInformation['file_name'],
            'storeId'=>$this->data['userInfo']['storeId']);
            if($storeServiceId=$this->StoreModel->InsertOrUpdateStoreService($data))
            { 
            $this->StoreModel->addStoreServicesEmployee($storeServiceId,$this->input->post('serviceProviderEmployeeId'));
            web_json_output(200,array('msg'=>"Successfully Added"));
            }
            else {
            web_json_output(400,array('msg'=>"Wrong Value"));
            }  
        }else {
            web_json_output(400,array('msg'=>"Wrong Value"));
          }
        }else
        {
          web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
  }
  public function deleteUI($storeServicesId)
  {
    $this->data['view']=$this->StoreModel->serviceDecrypt($this->data['userInfo']['storeId'],$storeServicesId);
    $this->load->view('backend/store/booking/service/serviceDelete',$this->data);
  }
  public function deleteAction()
  {
    $this->form_validation->set_rules('storeServicesId', 'storeServicesId', 'required');
    if ($this->form_validation->run() == true) {
      if($storeDetails=$this->StoreModel->serviceDecrypt($this->data['userInfo']['storeId'],$this->input->post('storeServicesId')))
      {
      if($this->StoreModel->deleteService($storeDetails['storeServicesId']))
      {
        web_json_output(200,array('msg'=>"Successfully Deleted"));
      }
      else{
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
      }else{
      web_json_output(400,array('msg'=>"Wrong Id"));
      }
       }else{
      web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
      }
  }
  public function hideOrShowUI($storeServicesId)
  {
    $this->data['view']=$this->StoreModel->serviceDecrypt($this->data['userInfo']['storeId'],$storeServicesId);
    $this->load->view('backend/store/booking/service/serviceVisibility',$this->data);
  }
  public function hideOrShowAction()
  {
    $this->form_validation->set_rules('storeServicesId', 'storeServicesId', 'required');
    if ($this->form_validation->run() == true) {
      if($storeDetails=$this->StoreModel->serviceDecrypt($this->data['userInfo']['storeId'],$this->input->post('storeServicesId')))
      {
        $visible=$storeDetails['is_visible']?0:1;
      if($this->StoreModel->hideOrShowStoreServicesByStoreServicesId($storeDetails['storeServicesId'],$visible))
      {
        web_json_output(200,array('msg'=>"Successfully Update"));
      }
      else{
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
    }else{
      web_json_output(400,array('msg'=>"Wrong Value"));
    }
    }else
    {
      web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
    }
  }

}
