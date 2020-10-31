<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CountryController extends Admin_Controller
{
     protected $title_nav_bar = array();
     protected $title;
     protected $country_details = array();
     public function __construct()
    {
        parent::__construct();
        $this->load->model('GeneralModel');
        $this->title_nav_bar = array('Home' => 'backend/admin/dashboard', 'General' => 'backend/admin/general/country/country', 'Country' => 'backend/admin/general/country/country');
        $this->title = 'Country List';
    }
     public function index()
    {
        $this->data['title_nav_bar'] = $this->title_nav_bar;
        $this->data['title'] = $this->title;
        $this->_Datatable_config();
        $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'country');
        $this->template('general/country/country', $this->data);
    }
     public function _Datatable_config()
    {      
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/general/country/datatable',
                'column_name'=>array('countyId','Country','Code','Digits','Status','view')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addCountry'),
                'privilege_value'=>'*'
 
            ),
            'title'=>'Country List'
         );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
     public function datatable()
    {
        $this->datatables
           ->select('country.CountryId,CountryName,CountryCode,TotalMobileNumberDigits,Status,0 as view')
           ->from('country');
        $this->datatables->edit_view('view', "admin/general/country/getdetails/$1", 'CountryId');
        echo $this->datatables->generate();

    }
     public function countryModalDetails($countryId)
    {
      $this->data['view'] =  $this->GeneralModel->getCountryDetailsByCountryId($countryId);
      $this->load->view('backend/admin/general/country/modal/view', $this->data);
    }
}
