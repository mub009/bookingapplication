<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MenuSettingController extends Store_Controller
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
        $this->template('booking/storesettings/menu/index',$this->data);
    }
  

}
