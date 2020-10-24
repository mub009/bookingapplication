<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LayoutController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Layout';
  $this->title_nav_bar = array('home' => 'admin/layout');
  $this->load->model('StoreThemeModel');
 }

 public function index()
 {
   $this->template('theme/1/layout',$this->data);
 }
}
