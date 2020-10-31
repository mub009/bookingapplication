<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StateController extends Admin_Controller
{
    protected $title_nav_bar = array();
    protected $title;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GeneralModel');
        $this->title_nav_bar=  array('Home' => 'backend/admin/dashboard', 'General' => 'backend/admin/general/state/State', 'State' => 'backend/admin/general/state/State');
        $this->title = 'State List';
    }
    public function index()
    { 
       $this->data['title_nav_bar'] = $this->title_nav_bar;
       $this->data['title'] = $this->title;
       $this->_Datatable_config();
       $this->data['legancy']=$this->Legancy->design(array('add','active','actions','block','view'),'State');
       $this->template('general/state/state', $this->data);
    }
    public function _Datatable_config()
    {
        $config=array(
            'datatable'=>array(
                'json_url'=>'admin/general/state/datatable',
                'column_name'=>array('stateId','Country Name','state','Code','Status','view','Actions')
            ),
            'toolbar'=>array(
                'privilege_array'=>array('addState'),
                'privilege_value'=>'*',
                'link_value'=>'admin/general/state/addform'
 
            ),
            'title'=>'State List'
         );
         $this->data['datatable']=$this->Datatabledesign->design($config);
    }
    public function datatable()
    { 
        $this->datatables
             ->select('state.stateId,country.CountryName,state.StateName,state.StateCode,state.Status,0 as view,0 as action')
             ->join('country','state.CountryId=country.CountryId')
             ->where(array('state.Status' =>'active'))
             ->from('state');
        
            $config['action_config']=array(array(
                'EveryPrivilege'=>'*',
                'value'=>'StateView',
                'privilege'=> '*',
                'link'=>'admin/general/state/editform/',
                'icon'=>icon_edit,
                'action_name'=>'Edit',
                'id'=>'$1'
            ),
            array(
                'EveryPrivilege'=>'*',
                'value'=>'StateView',
                'privilege'=> '*',
                'link'=>'backend/admin/general/state/modal/delete/',
                'icon'=>icon_delete,
                'action_name'=>'Delete',
                'id'=>'$1'
            )
        );
        $this->datatables->edit_action('action',  $config, 'stateId');
        $this->datatables->edit_view('view', "admin/general/state/getdetails/$1", 'stateId');
        echo $this->datatables->generate();
    }
    public function addAction()
    {
            $this->form_validation->set_rules('countryId', 'countryId ', 'required|regex_match[/^[0-9 +]+$/]');
            $this->form_validation->set_rules('StateName', 'State', 'required|regex_match[/^[0-9 a-zA-Z]+$/]');
            $this->form_validation->set_rules('StateCode', 'State Code', 'required|regex_match[/^[0-9 a-zA-Z +]+$/]');
            if ($this->form_validation->run() == true) {
                $stateDetails = array('stateName' =>  $this->input->post('StateName'), 'stateCode' => $this->input->post('StateCode'), 'countryId' => $this->input->post('countryId'),'createdDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'createdByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
                if ($this->GeneralModel->insertOrUpdateState($stateDetails)) {
                    web_json_output(200,array('msg'=>"Successfully Added"));
                } else {
                    web_json_output(400,array('msg'=>"Wrong Value"));
                }
            } else {
                web_json_output(400,array('msg'=>"Wrong Value"));
            }
    }
    public function editAction()
    {
            $this->form_validation->set_rules('countryId', 'country', 'required|regex_match[/^[0-9]+$/]');
            $this->form_validation->set_rules('StateName', 'stateName', 'required|regex_match[/^[0-9 A-Z a-z]+$/]');
            $this->form_validation->set_rules('StateCode', 'state Code', 'required|regex_match[/^[0-9 + A-Z a-z]+$/]');
            $this->form_validation->set_rules('stateId', 'stateId', 'required');
            if ($this->form_validation->run() == true) {
                $stateDetails = array('stateId'=>$this->input->post('stateId'),'stateName' => $this->input->post('StateName'), 'stateCode' => $this->input->post('StateCode'), 'countryId' => $this->input->post('countryId'),'lastUpdatedDateTime'=>$this->data['currentDateAndTime']['dateAndTime'],'updatedByAdminEmployeeId'=>$this->data['userInfo']['adminEmployeeId']);
                if ($this->GeneralModel->insertOrUpdateState($stateDetails,true)) {
                    web_json_output(200,array('msg'=>"Successfully Added"));
                } else {
                    web_json_output(400,array('msg'=>"Wrong Value"));
                }
            } else {
                web_json_output(400,array('msg'=>"Wrong Value"));
            }
    }
    public function stateDetailsByModal($stateId)
    {
     $this->data['view'] =  $this->GeneralModel->getStateDetailsByStateId($stateId);
     $this->load->view('backend/admin/general/state/Modal/view', $this->data);
    }
    public function addFormByModal()
    {
      $this->data['country']=$this->GeneralModel->getCountryList();
      $this->load->view('backend/admin/general/state/Modal/insert', $this->data);
    }
    public function editFormByModal($stateId)
    {
      $this->data['country']=$this->GeneralModel->getCountryList();
      $this->data['view'] =  $this->GeneralModel->getStateDetailsByStateId($stateId);
      $this->load->view('backend/admin/general/state/Modal/update', $this->data);
    }
}
