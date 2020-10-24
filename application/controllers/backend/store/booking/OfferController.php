<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OfferController extends Store_Controller
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
    $this->data['offer']=$this->StoreModel->getOfferByStoreId($this->data['userInfo']['storeId']);
    $this->template('booking/offer/offer',$this->data);
  }
  public function withOutCSRF_addUI()
  {
    $this->data['storeServices']=$this->StoreModel->getServiceByStoreId($this->data['userInfo']['storeId']);
    $this->template('booking/offer/offerAdd');
  }
  public function withOutCSRF_editUI($storeOfferId)
  {
     $this->data['view']=$this->StoreModel->storeOfferDecrypt($this->data['userInfo']['storeId'],$storeOfferId);
     $this->data['storeServices']=$this->StoreModel->getServiceByStoreId($this->data['userInfo']['storeId']);
     $this->template('booking/offer/offerEdit',$this->data);
  }
  public function editAction()
  {
    $this->form_validation->set_rules('offerTitle_en', 'offerName english', 'required');
    $this->form_validation->set_rules('offerTitle_ar', 'offerName arabic', 'required');
    $this->form_validation->set_rules('offerDescription_en', 'offer Description_en', 'required');
    $this->form_validation->set_rules('offerDescription_ar', 'offer Description_ar', 'required');
    $this->form_validation->set_rules('discount', 'discount', 'required');
    $this->form_validation->set_rules('offerStartDate', 'offerStartDate', 'required');
    $this->form_validation->set_rules('offerEndDate', 'offerEndDate', 'required');
    $this->form_validation->set_rules('storeOfferId', 'storeOfferId', 'required');
    if ($this->form_validation->run() == true) {
      if($storeOfferData=$this->StoreModel->storeOfferDecrypt($this->data['userInfo']['storeId'],$this->input->post('storeOfferId'))){
      if(!empty($_FILES['image']['name'])){
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'offerTitle_en'=>$this->input->post('offerTitle_en'),
            'offerTitle_ar'=>$this->input->post('offerTitle_ar'),
            'offerDescription_en'=>$this->input->post('offerDescription_en'),
            'offerDescription_ar'=>$this->input->post('offerDescription_ar'),
            'discount'=>$this->input->post('discount'),
            'storeOfferId'=>$storeOfferData['storeOfferId'],
            'offer_start'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerStartDate'))),
            'offer_end'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerEndDate'))),
            'img'=>$imageInformation['file_name']);
            if($this->StoreModel->InsertOrUpdateStoreOffer($data,TRUE)){ 
            web_json_output(200,array('msg'=>"Successfully Updated"));
            }else{
            web_json_output(400,array('msg'=>"Wrong Value"));
            }  
          }
        }else{
          $data=array(
            'offerTitle_en'=>$this->input->post('offerTitle_en'),
            'offerTitle_ar'=>$this->input->post('offerTitle_ar'),
            'offerDescription_en'=>$this->input->post('offerDescription_en'),
            'offerDescription_ar'=>$this->input->post('offerDescription_ar'),
            'discount'=>$this->input->post('discount'),
            'storeOfferId'=>$storeOfferData['storeOfferId'],
            'offer_start'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerStartDate'))),
            'offer_end'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerEndDate'))));

            if($this->StoreModel->InsertOrUpdateStoreOffer($data,TRUE))
            { 
              web_json_output(200,array('msg'=>"Successfully Updated"));
            }
            else {
               web_json_output(400,array('msg'=>"Wrong Value"));
            }   
        }
      }else{
        web_json_output(400,array('msg'=>"Wrong Value",'error'=>'Id'));
      }
      }
      else{
          web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
  }
  public function addAction()
  {
    $this->form_validation->set_rules('offerTitle_en', 'offerName english', 'required');
    $this->form_validation->set_rules('offerTitle_ar', 'offerName arabic', 'required');
    $this->form_validation->set_rules('offerDescription_en', 'offer Description_en', 'required');
    $this->form_validation->set_rules('offerDescription_ar', 'offer Description_ar', 'required');
    $this->form_validation->set_rules('cost', 'cost', 'required');
    $this->form_validation->set_rules('offerStartDate', 'offerStartDate', 'required');
    $this->form_validation->set_rules('offerEndDate', 'offerEndDate', 'required');
    if ($this->form_validation->run() == true) {
      $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
          $imageInformation = $this->upload->data();
          $this->image->image_cropping($imageInformation);
          $data=array(
            'storeServicesId'=>$this->input->post('storeServicesId'),
            'offerTitle_en'=>$this->input->post('offerTitle_en'),
            'offerTitle_ar'=>$this->input->post('offerTitle_ar'),
            'offerDescription_en'=>$this->input->post('offerDescription_en'),
            'offerDescription_ar'=>$this->input->post('offerDescription_ar'),
            'offer_start'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerStartDate'))),
            'offer_end'=>date('Y-m-d H:i:s', strtotime($this->input->post('offerEndDate'))),
            'discount'=>$this->input->post('cost'),
            'img'=>$imageInformation['file_name']);
            if($storeofferId=$this->StoreModel->InsertOrUpdateStoreOffer($data))
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
          web_json_output(400,array('msg'=>"Wrong Value",'error'=>validation_errors()));
        }
  }
  public function deleteUI($storeOffersId)
  {
    $this->data['view']=$this->StoreModel->offerDecrypt($this->data['userInfo']['storeId'],$storeOffersId);
    $this->load->view('backend/store/booking/offer/offerDelete',$this->data);
  }
  public function deleteAction()
  {
    $this->form_validation->set_rules('storeOffersId', 'storeOffersId', 'required');
    if ($this->form_validation->run() == true) {
      if($storeDetails=$this->StoreModel->offerDecrypt($this->data['userInfo']['storeId'],$this->input->post('storeOffersId')))
      {
      if($this->StoreModel->deleteOffer($storeDetails['storeOffersId']))
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
  public function hideOrShowUI($storeoffersId)
  {
    $this->data['view']=$this->StoreModel->offerDecrypt($this->data['userInfo']['storeId'],$storeoffersId);
    $this->load->view('backend/store/booking/offer/offerVisibility',$this->data);
  }
  public function hideOrShowAction()
  {
    $this->form_validation->set_rules('storeoffersId', 'storeoffersId', 'required');
    if ($this->form_validation->run() == true) {
      if($storeDetails=$this->StoreModel->offerDecrypt($this->data['userInfo']['storeId'],$this->input->post('storeoffersId')))
      {
        $visible=$storeDetails['is_visible']?0:1;
      if($this->StoreModel->hideOrShowStoreoffersByStoreoffersId($storeDetails['storeoffersId'],$visible))
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
