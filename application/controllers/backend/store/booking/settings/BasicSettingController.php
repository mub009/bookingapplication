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
         web_json_output(400,array('msg'=>"Wrong Value"));
        }
    }
   
}
