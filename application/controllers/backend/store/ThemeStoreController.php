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
   $this->data['activeTheme']=$this->StoreThemeModel->getActiveThemeByStoreId($this->data['userInfo']['storeId']);
   $this->data['themeList']=$this->StoreThemeModel->getThemeListWithActiveThemeByStoreId($this->data['userInfo']['storeId']);
   $this->template('storeTheme/theme',$this->data);
 }
 public function activeConfirmUI($storeActivatedThemeId)
 {
     $this->data['themeDetails'] = $this->StoreThemeModel->decodeThemeDetailsByThemeId($storeActivatedThemeId);
     $this->load->view('backend/store/storeTheme/themeActiveUI',$this->data);
 }
 public function actionActiveTheme()
 {
  $this->form_validation->set_rules('themeId', 'themeId', 'required');
  if ($this->form_validation->run() == true) {
        $themeDetails=$this->StoreThemeModel->decodeThemeDetailsByThemeId($this->input->post('themeId'));
        $activeTheme=array(
            'storeId'=>$this->data['userInfo']['storeId'],
            'themeId'=>$themeDetails['themeId']
        );
       if($this->StoreThemeModel->assignThemeToStoreByStoreId($activeTheme)){
          web_json_output(200,array('msg'=>"Successfully Change Theme"));
          }else{
          web_json_output(400,array('msg'=>"Wrong Value"));
          }  
      }else{
        web_json_output(400,array('msg'=>"Wrong Value"));
      }
 }
 public function cssModalUI($storeActivatedThemeId)
 {
     $this->data['themeDetails']=$this->StoreThemeModel->decodeActiveThemeDetailsByStoreActivatedThemeId($storeActivatedThemeId);
     $this->load->view('backend/store/storeTheme/cssUI',$this->data);
 }
 public function actionCSS()
    {
        $this->form_validation->set_rules('storeActivatedThemeId', 'storeActivatedThemeId', 'required');
        if ($this->form_validation->run() == true) {
            $themeDetails = $this->StoreThemeModel->decodeActiveThemeDetailsByStoreActivatedThemeId($this->input->post('storeActivatedThemeId'));
            $storeActivatedThemeDetails = array(
                'css' => $this->input->post('css'),
                'storeActivatedThemeId' => $themeDetails['storeActivatedThemeId']
            );
            if ($this->StoreThemeModel->InsertOrUpdateStoreActivatedTheme($storeActivatedThemeDetails, true)) {
                web_json_output(200, array('msg' => "Successfully Updated"));
            } else {
                web_json_output(400, array('msg' => "Wrong Value", 'error' => 'database'));
            }
        }else{
            web_json_output(400, array('msg' => "Wrong Value", 'error' => 'form validation'));
        }
    }
 public function buyDesignUI()
 {
     $this->data['themeList']=$this->StoreThemeModel->getBuyThemeListThemeByStoreId($this->data['userInfo']['storeId']);
     $this->template('storeTheme/buydesgin',$this->data);
 }
}
