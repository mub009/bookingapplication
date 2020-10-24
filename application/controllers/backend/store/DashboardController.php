<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DashboardController extends Store_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Store Dashboard';
  $this->title_nav_bar = array('home' => 'admin/dashboard');
 }

 public function index()
 {
   $this->template('dashboard');
 }
}
