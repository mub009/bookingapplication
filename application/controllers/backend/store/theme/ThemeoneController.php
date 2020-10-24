<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ThemeoneController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Store Dashboard';
  $this->title_nav_bar = array('home' => 'admin/dashboard');
  $this->data['pagePath']="theme/1/";
  $this->load->model('StoreThemeModel');
 }
 public function slider()
 {
   $this->data["slider"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'slider',$this->data['userInfo']['storeId']);
   $this->templateLayout('slider',$this->data);
 }
 public function css()
 {
   $this->data["css"]=$this->StoreThemeModel->getStoreThemeDetailsRowByThemeId(1,'css',$this->data['userInfo']['storeId']);
   $this->templateLayout('css',$this->data);
 }
 public function ajaxAction_cssAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
  $StoreThemeDetailsCSS=$this->StoreThemeModel->getStoreThemeDetailsRowByThemeId(1,'css',$this->data['userInfo']['storeId']);
  $json=json_encode($this->input->post('json'));
  $flag=false;
   if($StoreThemeDetailsCSS)
   {
    $data=array(
      'property'=>"css",
      'themeId'=>1,
      'json'=>$json,
      'storeThemeDetailsId'=>$StoreThemeDetailsCSS['storeThemeDetailsId'],
      'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
      $flag=true;
   }
   else {
    $data=array(
      'property'=>"css",
      'themeId'=>1,
      'json'=>$json,
      'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
      'storeId'=>$this->data['userInfo']['storeId'],
      'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
   }
    if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,$flag))
          {
          web_json_output(200,array('msg'=>"Successfully Update"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }
        }  
          else {
            web_json_output(400,array('msg'=>"Wrong Value"));
     } 
 }
 public function withOutCSRF_sliderAddUi()
 {
   $this->templateLayout('sliderAdd',$this->data);
 }
 public function withOutCSRF_sliderEditUi($storeThemeDetailsId)
 {
   $this->data["slider"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('sliderEdit',$this->data);
 }
 public function ajaxAction_sliderAction()
 {
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"slider",
          'mediaOne'=>$imageInformation['file_name'],
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
 }
 public function ajaxAction_sliderEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  if ($this->form_validation->run() == true) {
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"slider",
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
            $this->image->image_delete($storeThemeDetails['mediaOne']);  
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function modalDeleteItem($deleteType,$storeThemeDetailsId)
 {
   switch($deleteType)
   {
    case "slider":
      $this->data['title']="Do You Agree To Delete The Slider?";
      $this->data['redirect']="store/theme/one/slider";  
    break;
    case "features":
      $this->data['title']="Do You Agree To Delete The Features?";
      $this->data['redirect']="store/theme/one/features";  
    break;
    case "service":
      $this->data['title']="Do You Agree To Delete The service?";
      $this->data['redirect']="store/theme/one/service";  
    break;
    case "whychooseus":
      $this->data['title']="Do You Agree To Delete The Why Choose Us?";
      $this->data['redirect']="store/theme/one/whychooseus";  
    break;
    case "whychooseuslist":
      $this->data['title']="Do You Agree To Delete The Why Choose us List?";
      $this->data['redirect']="store/theme/one/whychooseuslist";  
    break;
    case "testimonial":
      $this->data['title']="Do You Agree To Delete testimonial?";
      $this->data['redirect']="store/theme/one/testimonial";  
    break;
   }
   $this->data['store']=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->load->view('backend/store/theme/1/deleteItem',$this->data);
 }
 public function modalVisibilityItem($visibilityType,$is_visible,$storeThemeDetailsId)
 {
   $contentName=($is_visible==1)?"Show":"Hidden";
   switch($visibilityType)
   {
    case "slider":
      $this->data['title']="Do You Agree To $contentName The Slider?";
      $this->data['redirect']="store/theme/one/slider";  
    break;
    case "features":
      $this->data['title']="Do You Agree To $contentName The features?";
      $this->data['redirect']="store/theme/one/features";  
    break;
    case "service":
      $this->data['title']="Do You Agree To $contentName The service?";
      $this->data['redirect']="store/theme/one/service";  
    break;
    case "whychooseus":
      $this->data['title']="Do You Agree To $contentName The Why Choose us?";
      $this->data['redirect']="store/theme/one/whychooseus";  
    break;
    case "whychooseuslist":
      $this->data['title']="Do You Agree To $contentName The Why Choose us List?";
      $this->data['redirect']="store/theme/one/whychooseuslist";  
    break;
    case "testimonial":
      $this->data['title']="Do You Agree To $contentName The testimonial?";
      $this->data['redirect']="store/theme/one/testimonial";  
    break;
  
   }
   $this->data['store']=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->load->view('backend/store/theme/1/visibility',$this->data);
 }
 public function ajaxAction_visibilityAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  if ($this->form_validation->run() == true) {
     $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
     $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
     $data=array(
       'storeThemeDetailsId'=>$storeThemeDetailsId,
       'is_visible'=>(($storeThemeDetails['is_visible']==1)?0:1)
      );
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
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

 public function ajaxAction_deleteAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  if ($this->form_validation->run() == true) {
        $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
        $this->_unlinkImages($storeThemeDetailsId);
        if($this->StoreThemeModel->delete($storeThemeDetailsId))
          {
            web_json_output(200,array('msg'=>"Successfully Deleted"));
          }else
          {
            web_json_output(400,array('msg'=>"Wrong Value"));
          }
   }
   else
   {
    web_json_output(400,array('msg'=>"Wrong Value"));
   }
}

 public function features()
 {
   $this->data["feature"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'features',$this->data['userInfo']['storeId']);
   $this->templateLayout('features',$this->data);
 }
 public function withOutCSRF_featuresAddUi()
 {
   $this->templateLayout('featuresAdd',$this->data);
 }
 public function ajaxAction_featuresAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"features",
          'mediaOne'=>$imageInformation['file_name'],
          'json'=>$json,
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function withOutCSRF_featuresEditUi($storeThemeDetailsId)
 {
   $this->data["features"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('featuresEdit',$this->data);
 }
 public function ajaxAction_featuresEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"features",
          'json'=>$json,
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          { 
          $this->image->image_delete($storeThemeDetails['mediaOne']);
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
        $data=array(
          'property'=>"features",
          'json'=>$json,
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
             web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
             web_json_output(400,array('msg'=>"Wrong Value"));
          } 
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function service()
 {
   $this->data["service"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'service',$this->data['userInfo']['storeId']);
   $this->templateLayout('service',$this->data);
 }
 public function withOutCSRF_serviceAddUi()
 {
   $this->templateLayout('serviceAdd',$this->data);
 }
 public function ajaxAction_serviceAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"service",
          'mediaOne'=>$imageInformation['file_name'],
          'json'=>$json,
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function withOutCSRF_serviceEditUi($storeThemeDetailsId)
 {
   $this->data["service"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('serviceEdit',$this->data);
 }
 public function ajaxAction_serviceEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"service",
          'json'=>$json,
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          { 
          $this->image->image_delete($storeThemeDetails['mediaOne']);
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
        $data=array(
          'property'=>"service",
          'json'=>$json,
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
             web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
             web_json_output(400,array('msg'=>"Wrong Value"));
          } 
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function whyChooseUs()
 {
   $this->data["whychooseus"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'whychooseus',$this->data['userInfo']['storeId']);
   $this->templateLayout('whyChooseUs',$this->data);
 }
 public function withOutCSRF_whyChooseUsAddUi()
 {
   $this->templateLayout('whychooseusAdd',$this->data);
 }
 public function ajaxAction_whyChooseUsAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"whychooseus",
          'mediaOne'=>$imageInformation['file_name'],
          'json'=>$json,
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function withOutCSRF_whyChooseUsEditUi($storeThemeDetailsId)
 {
   $this->data["whychooseus"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('whychooseusEdit',$this->data);
 }
 public function ajaxAction_whyChooseUsEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"whychooseus",
          'json'=>$json,
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          { 
          $this->image->image_delete($storeThemeDetails['mediaOne']);
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
        $data=array(
          'property'=>"whychooseus",
          'json'=>$json,
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
             web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
             web_json_output(400,array('msg'=>"Wrong Value"));
          } 
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function whyChooseUsList()
 {
   $this->data["whychooseuslist"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'whychooseuslist',$this->data['userInfo']['storeId']);
   $this->templateLayout('whyChooseUsList',$this->data);
 }
 public function withOutCSRF_whyChooseUsListAddUi()
 {
   $this->templateLayout('whychooseuslistAdd',$this->data);
 }
 public function ajaxAction_whyChooseUsListAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"whychooseuslist",
          'mediaOne'=>$imageInformation['file_name'],
          'json'=>$json,
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function withOutCSRF_whyChooseUsListEditUi($storeThemeDetailsId)
 {
   $this->data["whychooseuslist"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('whychooseuslistEdit',$this->data);
 }
 public function ajaxAction_whyChooseUsListEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'json'=>$json,
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          { 
          $this->image->image_delete($storeThemeDetails['mediaOne']);
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
        $data=array(
          'property'=>"whychooseus",
          'json'=>$json,
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
             web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
             web_json_output(400,array('msg'=>"Wrong Value"));
          } 
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function testimonial()
 {
   $this->data["testimonial"]=$this->StoreThemeModel->getStoreThemeDetailsByThemeId(1,'testimonial',$this->data['userInfo']['storeId']);
   $this->templateLayout('testimonial',$this->data);
 }
 public function withOutCSRF_testimonialAddUi()
 {
   $this->templateLayout('testimonialAdd',$this->data);
 }
 public function ajaxAction_testimonialAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'property'=>"testimonial",
          'mediaOne'=>$imageInformation['file_name'],
          'json'=>$json,
          'themeId'=>1,
          'mediaOneType'=>'image',
          'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
          'storeId'=>$this->data['userInfo']['storeId'],
          'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime']);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
          {
          web_json_output(200,array('msg'=>"Successfully Created"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      } else {
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function withOutCSRF_testimonialEditUi($storeThemeDetailsId)
 {
   $this->data["testimonial"]=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   $this->templateLayout('testimonialEdit',$this->data);
 }
 public function ajaxAction_testimonialEditAction()
 {
  $this->form_validation->set_rules('storeThemeDetailsId', 'storeThemeDetailsId', 'required');
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
    $this->image->ImageConfig();
    if ($this->upload->do_upload('image')) {
        $imageInformation = $this->upload->data();
        $this->image->image_cropping($imageInformation);
        $data=array(
          'json'=>$json,
          'mediaOne'=>$imageInformation['file_name'],
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          { 
          $this->image->image_delete($storeThemeDetails['mediaOne']);
          web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else {
        $data=array(
          'json'=>$json,
          'storeThemeDetailsId'=>$storeThemeDetailsId);
          if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
          {
             web_json_output(200,array('msg'=>"Successfully Updated"));
          }
          else {
             web_json_output(400,array('msg'=>"Wrong Value"));
          } 
        }
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }


 public function contact()
 {
  $this->data["contact"]=$this->StoreThemeModel->getStoreThemeDetailsRowByThemeId(1,'contact');
   $this->templateLayout('contact',$this->data);
 }
 public function ajaxAction_contactEditAction()
 {
  $this->form_validation->set_rules('json[]', 'json', 'required');
  if ($this->form_validation->run() == true) {
    $json=json_encode($this->input->post('json'));
    $storeThemeDetailsId=$this->input->post('storeThemeDetailsId');
    if($contactDetails=$this->StoreThemeModel->getStoreThemeDetailsRowByThemeId(1,'contact'))
    {
      $data=array(
        'json'=>$json,
        'storeThemeDetailsId'=>$contactDetails['storeThemeDetailsId']);
        if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data,true))
        {
           web_json_output(200,array('msg'=>"Successfully Updated"));
        }
        else {
           web_json_output(400,array('msg'=>"Wrong Value"));
        } 
    }else
    {
      $data=array(
        'themeId'=>1,
        'property'=>'contact',
        'storeEmployeeId'=>$this->data['userInfo']['storeEmployeeId'],
        'storeId'=>$this->data['userInfo']['storeId'],
        'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],
        'json'=>$json);
        if($this->StoreThemeModel->insertOrUpdateStoreThemeDetails($data))
        {
           web_json_output(200,array('msg'=>"Successfully Updated"));
        }
        else {
           web_json_output(400,array('msg'=>"Wrong Value"));
        } 
    }   
      }else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }

 public function logo()
 {
   $this->templateLayout('logo',$this->data);
 }
//common function
public function _unlinkImages($storeThemeDetailsId)
 {
   $storeThemeDetails=$this->StoreThemeModel->getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId);
   if(!empty($storeThemeDetails['mediaOne']))
    {
      $this->image->image_delete($storeThemeDetails['mediaOne']);
    }
  if(!empty($storeThemeDetails['mediaTwo']))
  {
    $this->image->image_delete($storeThemeDetails['mediaTwo']);
  }
 }
 
}
