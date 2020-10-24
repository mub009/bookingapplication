<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProductController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
  public function __construct()
  {
    parent::__construct();
    $this->title_name = 'Layout';
    $this->title_nav_bar = array('home' => 'admin/layout');
    $this->load->model('EcommerceModel');
  }
  public function index()
  {
    // $this->data['offer']=$this->StoreModel->getOfferByStoreId($this->data['userInfo']['storeId']);
    $this->template('offer/offer',$this->data);
  }
}
