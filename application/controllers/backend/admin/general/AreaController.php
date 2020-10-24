<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AreaController extends Admin_Controller
{
    protected $title_nav_bar = array();
    protected $title;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GeneralModel');
        $this->data['title_nav_bar'] = array('Home' => 'backend/admin/dashboard', 'General' => 'backend/admin/general/area/area', 'Area' => 'backend/admin/general/area/area');
        $this->title = 'Area List';
    }
    public function index()
    {
        $this->data['title'] = $this->title;
        $this->_Datatable_config();
        $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'Area'); 
        $this->template('general/area/area', $this->data);
    }
    public function _Datatable_config()
    {  
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/general/area/datatable',
                'column_name'=>array('Id','areaName','areaCode','CityName','StateName','CountryName','action','view')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('AreaView'),
                'privilege_value'=>'AreaView',
                'link_value'=>'admin/general/area/addform'
            ),
            'title'=>'Area List'
         );
         $this->data['datatable']=$this->Datatabledesign->design($config);   
    }
    public function datatable()
    {
        $this->datatables
        ->select('area.areaId,area.areaName,area.areaCode,city.CityName,state.StateName,country.CountryName,0 as view,0 as action')
        ->join('city','city.cityId=area.cityId')
        ->join('state','state.stateId=city.cityId')
        ->join('country','country.CountryId=state.stateId')
        ->from('area');
            $config['action_config']=array(array(
                'EveryPrivilege'=>array('AreaEdit'),
                'value'=>'AreaEdit',
                'privilege'=>array('AreaEdit'),
                'link'=>'admin/general/area/editform/',
                'icon'=>icon_edit,
                'action_name'=>'Edit',
                'id'=>'$1'
            ),
            array(
                'EveryPrivilege'=>array('AreaDelete'),
                'value'=>'AreaDelete',
                'privilege'=>array('AreaDelete'),
                'link'=>'backend/admin/general/area/modal/delete/',
                'icon'=>icon_delete,
                'action_name'=>'Delete',
                'id'=>'$1'
            )
        );
        $this->datatables->edit_action('action',  $config, 'areaId');
        $this->datatables->edit_view('view', "admin/general/area/getdetails/$1", 'areaId');
        echo $this->datatables->generate();
    }
    public function editAction()
    {
        $this->form_validation->set_rules('areaId', 'areaId', 'required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('countryId', 'countryId ', 'required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('stateId', 'StateId', 'required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('cityId', 'cityId', 'required|regex_match[/^[0-9]+$/]');
        $this->form_validation->set_rules('areaName', 'areaName', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
        $this->form_validation->set_rules('areaCode', 'areaCode', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
        if ($this->form_validation->run() == true) {
            $areaDetails = array('areaId'=>$this->input->post('areaId'),'countryId'=>$this->input->post('countryId'),'stateId'=>$this->input->post('stateId'),'cityId'=>$this->input->post('cityId'),'areaName'=>$this->input->post('areaName'),'areaCode'=>$this->input->post('areaCode'),'lastUpdatedDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'updatedByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
            if ($this->GeneralModel->insertOrUpdateArea($areaDetails,$is_update=true)) {
                web_json_output(200,array('msg'=>"Successfully Updated"));
            } else {
                web_json_output(400,array('msg'=>"Wrong Value"));
            }
        } else {
            web_json_output(400,array('msg'=>"Wrong Value"));
        }
    }
    public function addAction()
    {
            $this->form_validation->set_rules('countryId', 'countryId ', 'required|regex_match[/^[0-9]+$/]');
            $this->form_validation->set_rules('stateId', 'StateId', 'required|regex_match[/^[0-9]+$/]');
            $this->form_validation->set_rules('cityId', 'cityId', 'required|regex_match[/^[0-9]+$/]');
            $this->form_validation->set_rules('areaName', 'areaName', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
            $this->form_validation->set_rules('areaCode', 'areaCode', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
            if ($this->form_validation->run() == true) {
                $areaDetails = array('countryId'=>$this->input->post('countryId'),'stateId'=>$this->input->post('stateId'),'cityId'=>$this->input->post('cityId'),'areaName'=>$this->input->post('areaName'),'areaCode'=>$this->input->post('areaCode'),'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'createdByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
                if ($this->GeneralModel->insertOrUpdateArea($areaDetails)) {
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
      $this->load->view('backend/admin/general/area/modal/insert', $this->data);
    }
    public function editFormByModal($areaId)
    {
        $this->data['view'] =  $this->GeneralModel->getAreaDetailsByAreaId($areaId);
        $this->data['country']=$this->GeneralModel->getCountryList();
        $this->data['state']=$this->GeneralModel->getStateListByCountryId($this->data['view']['countryId']);
        $this->data['city']=$this->GeneralModel->getCityListByStateId($this->data['view']['stateId']);
        $this->load->view('backend/admin/general/area/modal/update', $this->data);
    }
    public function viewAreaDetailsByModal($areaId)
    {
       $this->data['view'] =  $this->GeneralModel->getAreaDetailsByAreaId($areaId);
       $this->load->view('backend/admin/general/area/modal/view', $this->data);
    }
}
