<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DashboardController extends Admin_Controller
{
 protected $title_name;
 protected $title_nav_bar;
 public function __construct()
 {
  parent::__construct();
  $this->title_name = 'Admin Dashboard';
  $this->title_nav_bar = array('home' => 'admin/dashboard');
 }

 public function index()
 {
   $this->template('dashboard');
 }
 public function Country_via_Customer_list()
 {
       $country=$this->Base_Model->query('SELECT tbl_country.CountryName as country, COUNT(CountryName) as visits FROM tbl_country left join tbl_user_type on tbl_country.Id=tbl_user_type.CountryId where tbl_user_type.UserTypeId=33 GROUP BY tbl_country.CountryName order by visits desc ');
       $max=$this->Base_Model->query('SELECT MAX(visits)+20 as max FROM (SELECT tbl_country.CountryName as country, COUNT(CountryName) as visits  FROM tbl_country left join tbl_user_type on tbl_country.Id=tbl_user_type.CountryId where tbl_user_type.UserTypeId=33 GROUP BY tbl_country.CountryName order by visits desc) as a','row_array');
      echo json_encode(array('list'=>$country,'max'=>$max));  
 }
}
