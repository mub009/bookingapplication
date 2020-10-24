<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SettingController extends Admin_Controller
{   
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard','Settings'=>'admin/setting');
        $this->template('setting/setting', $this->data);
    }

}
