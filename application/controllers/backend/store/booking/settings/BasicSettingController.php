<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BasicSettingController extends Store_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StoreModel');
    }
    public function withOutCSRF_index()
    {
        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard','Settings'=>'admin/setting','Basic Settings'=>'');
        $this->data['locationList']=$this->StoreModel->getStoreLocationListByStoreId($this->data['userInfo']['storeId']);
        $this->data['storeDetails']=$this->StoreModel->getStoreDetailsByStoreId($this->data['userInfo']['storeId']);
        $this->template('booking/storesettings/basic/index', $this->data);
    }
    public function logoUpload()
    {
     $this->image->ImageConfig();
      if ($this->upload->do_upload('image')) {
         $imageInformation = $this->upload->data();
         $this->image->image_cropping($imageInformation);
         if($this->StoreModel->updateLogoByStoreId($this->data['userInfo']['storeId'],$imageInformation['file_name']))
            { 
             web_json_output(200,array('msg'=>"Successfully Update"));
            }else{
             web_json_output(400,array('msg'=>"Wrong Value"));
            }  
         }else{
         web_json_output(400,array('msg'=>$this->upload->display_errors()));
        }
    }
    public function actionBasicSettings()
    {
        $actionBasicSettingsDetails=array(
                'storeName'=>$this->input->post('storeName'),
                'storeAbout'=>$this->input->post('about'),
                'storeAddress'=>$this->input->post('address'),
                'storeId'=>$this->data['userInfo']['storeId']);
            if($this->StoreModel->UpdateOrInsertStore($actionBasicSettingsDetails,true)){ 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                }  
    }
    public function actionSocialMedia()
    {
         $actionSocialMedia=array(
                'socialMediaFacebookId'=>$this->input->post('socialFacebook'),
                'socialMediaSnapChatId'=>$this->input->post('socialSnapChat'),
                'socialMediaYoutubeId'=>$this->input->post('socialYoutube'),
                'socialMediaInstagramId'=>$this->input->post('socialInstagram'),
                'socialMediaTwitterId'=>$this->input->post('socialTwitter'),
                'storeId'=>$this->data['userInfo']['storeId']);
            if($this->StoreModel->UpdateOrInsertStore($actionSocialMedia,true)){ 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                }  
    }
    public function actionTechnicalSupport()
    {
         $TechnicalSupportDetails=array(
                'contact1'=>$this->input->post('contact'),
                'contact2'=>$this->input->post('contact2'),
                'email'=>$this->input->post('email'),
                'storeId'=>$this->data['userInfo']['storeId']);
            if($this->StoreModel->UpdateOrInsertStore($TechnicalSupportDetails,true)){ 
                web_json_output(200,array('msg'=>"Successfully Updated"));
                }else {
                web_json_output(400,array('msg'=>"Wrong Value"));
                }  
    }
   
}
