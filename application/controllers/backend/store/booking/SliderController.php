<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SliderController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
  public function __construct()
  {
    parent::__construct();
    $this->title_name = 'Slider';
    $this->title_nav_bar = array('home' => 'admin/layout');
    $this->load->model('StoreModel');
  }
  public function index()
  {
    $this->data['slider']=$this->StoreModel->getSliderByShopId($this->data['userInfo']['storeId']);
    $this->template('booking/slider/slider',$this->data);
  }

  public function withOutCSRF_addUI()
  {
    $this->template('booking/slider/sliderAdd');
  }
  public function withOutCSRF_editUI($storeSliderId)
  {
    $this->data['view']=$this->StoreModel->getCategoriesDetailsByStoreServiceCategoriesId($storeServiceCategoriesId);
    $this->template('booking/slider/sliderEdit',$this->data);
  }
  public function editAction()
  {
    $this->form_validation->set_rules('categoryName_english', 'categoryName_english', 'required');
    $this->form_validation->set_rules('categoryName_arabic', 'categoryName_arabic', 'required');
    $this->form_validation->set_rules('storeServiceCategoriesId', 'storeServiceCategoriesId', 'required');
    if ($this->form_validation->run() == true) {
      $data=array();
      if(!empty($_FILES['image']['name']))
      {
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'categoryName_en'=>$this->input->post('categoryName_english'),
            'categoryName_ar'=>$this->input->post('categoryName_arabic'),
            'img'=>$imageInformation['file_name'],
            'storeServiceCategoriesId'=>$this->input->post('storeServiceCategoriesId'));
        }else {
            web_json_output(400,array('msg'=>"Wrong Value"));
          }
        }
        else
        {
          $data=array(
            'categoryName_en'=>$this->input->post('categoryName_english'),
            'categoryName_ar'=>$this->input->post('categoryName_arabic'),
            'storeServiceCategoriesId'=>$this->input->post('storeServiceCategoriesId'));
        }
        if($this->StoreModel->InsertOrUpdateStoreServiceCategories($data,true))
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
  public function addAction()
  {
    $this->form_validation->set_rules('categoryName_english', 'categoryName_english', 'required');
    $this->form_validation->set_rules('categoryName_arabic', 'categoryName_arabic', 'required');
    if ($this->form_validation->run() == true) {
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'categoryName_en'=>$this->input->post('categoryName_english'),
            'categoryName_ar'=>$this->input->post('categoryName_arabic'),
            'img'=>$imageInformation['file_name'],
            'storeId'=>$this->data['userInfo']['storeId']);
            if($this->StoreModel->InsertOrUpdateStoreServiceCategories($data))
            { 
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
          web_json_output(400,array('msg'=>"Wrong Value"));
        }
  }
  public function deleteUI($storeServiceCategoriesId)
  {
    $this->data['view']=$this->StoreModel->getCategoriesDetailsByStoreServiceCategoriesId($storeServiceCategoriesId);
    $this->load->view('backend/store/booking/slider/sliderDelete',$this->data);
  }
  public function deleteAction()
  {
    $this->form_validation->set_rules('storeServiceCategoriesId', 'storeServiceCategoriesId', 'required');
    if ($this->form_validation->run() == true) {
      if($this->StoreModel->deleteCategories($this->input->post('storeServiceCategoriesId')))
      {
        web_json_output(200,array('msg'=>"Successfully Deleted"));
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
    }else
    {
      web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
    }
  }
  public function hideOrShowUI($storeServiceCategoriesId)
  {
    $this->data['view']=$this->StoreModel->getCategoriesDetailsByStoreServiceCategoriesId($storeServiceCategoriesId);
    $this->load->view('backend/store/booking/slider/sliderVisibility',$this->data);
  }
  public function hideOrShowAction()
  {
    $this->form_validation->set_rules('storeServiceCategoriesId', 'storeServiceCategoriesId', 'required');
    if ($this->form_validation->run() == true) {
      $storeServiceCategoriesId=$this->input->post('storeServiceCategoriesId');
      $categoriesDetails=$this->StoreModel->getCategoriesDetailsByStoreServiceCategoriesId($storeServiceCategoriesId);
      $visible=$categoriesDetails['is_visible']?0:1;
      if($this->StoreModel->hideOrShowCategoriesByStoreServiceCategoriesId($storeServiceCategoriesId,$visible))
      {
        web_json_output(200,array('msg'=>"Successfully Update"));
      }
      else
      {
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
    }else
    {
      web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
    }
  }
}
