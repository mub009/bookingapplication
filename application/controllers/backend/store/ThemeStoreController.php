<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ThemeStoreController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Layout';
  $this->title_nav_bar = array('home' => 'admin/layout');
  $this->load->model('StoreThemeModel');
  $this->load->model('StoreModel');
 }

 public function index()
 {
   $this->data['themeList']=$this->StoreThemeModel->getThemeListWithActiveThemeByStoreId($this->data['userInfo']['storeId']);
   $this->template('themelist/theme',$this->data);
 }
 public function activeConfirmUI($themeId)
 {
  $this->data['themeDetails']=$this->StoreThemeModel->decodeThemeDetailsByThemeId($themeId);
  $this->load->view('backend/store/themelist/activeUI',$this->data);
 }
 public function actionActiveTheme()
 {
  $this->form_validation->set_rules('themeId', 'themeId', 'required');
  if ($this->form_validation->run() == true) {
       $themeDetails=$this->StoreThemeModel->decodeThemeDetailsByThemeId($this->input->post('themeId'));
       if($this->StoreModel->changeThemeByThemeIdWithStoreId($themeDetails['themeId'],$this->data['userInfo']['storeId'])){
          web_json_output(200,array('msg'=>"Successfully Change Theme"));
          }else{
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else{
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }

}
