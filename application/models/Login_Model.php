<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 public function getAdminEmployeeByUserName($userName)
    {
        $this->db->select('adminemployee.adminEmployeeId as adminEmployeeId,adminemployee.userName as userName,adminemployee.password as password,adminemployee.email as email,adminemployee.status as status,country.timeZone as timeZone,country.countryName as countryName')
                  ->join('admin', 'admin.AdminId=adminemployee.AdminEmployeeId', 'join')
                  ->join('country', 'country.countryId=admin.countryId', 'join')
                  ->where(array('adminemployee.UserName ' => $userName));
        $this->query = $this->db->get('adminemployee');
        return $this->query->row_array();
    }
 public function getAdminEmployeeByAdminEmployeeId($adminEmployeeId)
    {
        $this->db->select('adminemployee.password as password,adminemployee.adminEmployeeId as adminEmployeeId,adminemployee.userName as userName,adminemployee.password as password,adminemployee.email as email,adminemployee.status as status,country.timeZone as timeZone,country.countryName as countryName,country.CountryId as CountryId')
                  ->join('admin', 'admin.adminId=adminemployee.adminEmployeeId', 'join')
                  ->join('country', 'country.countryId=admin.countryId', 'join')
                  ->where(array('adminemployee.adminEmployeeId ' => $adminEmployeeId));
        $this->query = $this->db->get('adminemployee');
        return $this->query->row_array();
    }

 
 public function getStoreEmployeeByUserName($userName)
 {
    $this->db->select('storemployee.storeEmployeeId as storeEmployeeId,storemployee.userName as userName,storemployee.password as password,storemployee.email as email,storemployee.status as status,country.timeZone as timeZone,country.countryName as countryName')
            ->join('store', 'store.storeId=storemployee.storeId', 'join')
            ->join('country', 'country.countryId=store.countryId', 'join')
            ->where(array('storemployee.UserName ' => $userName));
    $this->query = $this->db->get('storemployee');
    return $this->query->row_array();
 }
 public function getStoreEmployeeByStoreEmployeeId($storeEmployeeId)
 {
    $this->db->select('store.storeId,storemployee.storeEmployeeId as storeEmployeeId,storemployee.userName as userName,storemployee.password as password,storemployee.email as email,storemployee.status as status,country.timeZone as timeZone,country.countryName as countryName')
    ->join('store', 'store.storeId=storemployee.storeId', 'join')
    ->join('country', 'country.countryId=store.countryId', 'join')
    ->where(array('storemployee.storeEmployeeId' => $storeEmployeeId));
    $this->query = $this->db->get('storemployee');
     return $this->query->row_array();
 }
}