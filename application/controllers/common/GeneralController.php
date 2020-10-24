<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneralController extends MY_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('GeneralModel');
    }
    function getStateByCountryId()
    {
      $data['ajax']=$this->GeneralModel->getStateListByCountryId($this->input->get('countryId'));
      $this->load->view('common/general/state_ajax',$data,false);
    }
    function getCityByStateId()
    {
      $data['ajax']=$this->GeneralModel->getCityListByStateId($this->input->get('stateId'));
      $this->load->view('common/general/city_ajax',$data,false); 
    }
    function getAreaByCityId()
    {
      $data['ajax']=$this->GeneralModel->getAreaListByCityId($this->input->get('cityId'));
      $this->load->view('common/general/area_ajax',$data,false);    
    }
}