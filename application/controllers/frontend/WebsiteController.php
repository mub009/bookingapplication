<?php
defined('BASEPATH') or exit('No direct script access allowed');
class WebsiteController extends ThemeController
{
   public function __construct()
    {
    parent::__construct();
    $this->load->model('StoreThemeModel');
    $this->load->model('StoreModel');
    }
    public function _remap($method,$params = array())
    {
        $storeDetails="";
       // $domainName=strtolower($_SERVER['HTTP_HOST']);
       $domainName="test.mydomain.com";
       if($domainName!='localhost')
       {
           $explodeDomain=explode('.',$domainName);
           if(count($explodeDomain)==3){
              $storeDetails=$this->StoreModel->storeDetailsByStoreSubDomainName($explodeDomain[0]);
           }
           else{
               $storeDetails=$this->StoreModel->storeDetailsByStoreDomainName($domainName); 
           }
      }
      $this->data['domainName']=$domainName;
      $this->data['storeDetails']=$storeDetails;
      if($page=json_decode($storeDetails['page'],false))
      {
       if(is_numeric(array_search($method,$page,false))){
           switch ($method) {
               case 'index':
                   $this->_home();
                   break;
               case 'gallery':
                   $this->_gallery();
                   break;
               case 'contact':
                   $this->_contact();
                   break;
           }
       }
       else
       {
           die('404 page');
       }
   }else{
       die('no data');
   }
}
public function _home()
 {
        //print_r($this->data['storeDetails']);
        $this->template('home');
 }
}
?>
