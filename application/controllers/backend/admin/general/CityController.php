<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CityController extends Admin_Controller
{
    protected $title_nav_bar = array();
    protected $title;
    public function __construct()
     {
        parent::__construct();
        $this->load->model('GeneralModel');
        $this->title_nav_bar = array('Home' => 'backend/admin/dashboard', 'General' => 'backend/admin/general/city/city', 'City' => 'backend/admin/general/city/city');
        $this->title = 'City List';
     }
    public function index()
    {
        $this->data['title_nav_bar'] =$this->title_nav_bar; 
        $this->data['title'] =  $this->title;
        $this->_Datatable_config();
        $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'State');
        $this->template('general/city/city', $this->data);
    }
    public function _Datatable_config()
    {  
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/general/city/datatable',
                'column_name'=>array('Id','Country','State','City','Code','Status','view','Actions')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addCity'),
                'privilege_value'=>'addCity',
                'link_value'=>'admin/general/city/addform'
            ),
            'title'=>'City List'
         );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
    public function datatable()
    {
        $this->datatables
            ->select('city.cityId,country.CountryName,state.StateName,city.CityName,city.CityCode,city.status,0 as view,0 as action')
            ->join('country', 'country.countryId=city.CountryId')
            ->join('state', 'state.stateId=city.StateId')
            ->from('city');
            $config['action_config']=array(array(
                'EveryPrivilege'=>'*',
                'value'=>'CityView',
                'privilege'=> '*',
                'link'=>'admin/general/city/editform/',
                'icon'=>icon_edit,
                'action_name'=>'Edit',
                'id'=>'$1'
            ),
            array(
                'EveryPrivilege'=>'*',
                'value'=>'CityView',
                'privilege'=> '*',
                'link'=>'backend/admin/general/city/modal/delete/',
                'icon'=>icon_delete,
                'action_name'=>'Delete',
                'id'=>'$1'
            )
        );
        $this->datatables->edit_action('action',  $config, 'cityId');
        $this->datatables->edit_view('view', "admin/general/city/getdetails/$1", 'cityId');
        echo $this->datatables->generate();
    }
    public function editAction()
    {
                $this->form_validation->set_rules('cityId', 'cityId ', 'required|regex_match[/^[0-9 +]+$/]');
                $this->form_validation->set_rules('countryId', 'countryId ', 'required|regex_match[/^[0-9 +]+$/]');
                $this->form_validation->set_rules('StateId', 'StateId', 'required|callback_is_unique[state.StateName]|regex_match[/^[0-9 a-zA-Z]+$/]');
                $this->form_validation->set_rules('CityName', 'CityName', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
                $this->form_validation->set_rules('CityCode', 'CityCode', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
                if ($this->form_validation->run() == true) {
                    $cityDetails = array('cityId'=>$this->input->post('cityId'),'cityName'=>$this->input->post('CityName'),'cityCode'=>$this->input->post('CityCode'),'countryId'=>$this->input->post('countryId'),'stateId'=>$this->input->post('StateId'),'lastUpdatedDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'updatedByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
                    if ($this->GeneralModel->insertOrUpdateCity($cityDetails,$is_update=true)) {
                        web_json_output(200,array('msg'=>"Successfully Added"));
                    } else {
                        web_json_output(400,array('msg'=>"Wrong Value"));
                    }
                } else {
                    web_json_output(400,array('msg'=>"Wrong Value"));
                }
    }
    public function addAction()
    {
        $this->form_validation->set_rules('countryId', 'Country ', 'required|regex_match[/^[0-9 +]+$/]');
        $this->form_validation->set_rules('stateId', 'state ', 'required|regex_match[/^[0-9 +]+$/]');
        $this->form_validation->set_rules('cityName', 'city', 'required|regex_match[/^[0-9 A-Z a-z]+$/]');
        $this->form_validation->set_rules('cityCode', 'city Code', 'required|regex_match[/^[0-9 + A-Z a-z]+$/]');
        if ($this->form_validation->run() == true) {
            $cityDetails = array('cityName' => $this->input->post('cityName'),'cityCode' => $this->input->post('cityCode'), 'countryId' => $this->input->post('countryId'), 'stateId' => $this->input->post('stateId'),'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'createdByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
            if ($this->GeneralModel->insertOrUpdateCity($cityDetails)) {
                web_json_output(200,array('msg'=>"Successfully Added"));
            } else {
                web_json_output(400,array('msg'=>"Wrong Value"));
            }
            } else {
            web_json_output(400,array('msg'=>"Wrong Value"));
            }
    }
    public function addFormByModal()
    {
      $this->data['country']=$this->GeneralModel->getCountryList();
      $this->load->view('backend/admin/general/city/modal/insert', $this->data);
    }
    public function editFormByModal($cityId)
    {
        $this->data['view'] =  $this->GeneralModel->getCityDetailsByCityId($cityId);
        $this->data['country']=$this->GeneralModel->getCountryList();
        $this->data['state']=$this->GeneralModel->getStateListByCountryId($this->data['view']['countryId']);
        $this->load->view('backend/admin/general/city/modal/update', $this->data);
    }
    public function viewCityDetailsByModal($cityId)
    {
       $this->data['view'] =  $this->GeneralModel->getCityDetailsByCityId($cityId);
       $this->load->view('backend/admin/general/city/Modal/view', $this->data);
    }
}
