<?php
class GeneralModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getCountryDetailsByCountryId($countryId)
    {

        $this->db->select('*')
            ->from('country')
            ->where('CountryId', $countryId);
        $query = $this->db->get();
        return $query->row_array();
    }
    function getStateDetailsByStateId($stateId)
    {
        $this->db->select('*')
            ->from('state')
            ->where('stateId', $stateId);
        $query = $this->db->get();
        return $query->row_array();
    }

    function getStateListByCountryId($countryId)
    {
        $this->db->select('*')
            ->from('state')
            ->where('CountryId', $countryId);
        $query = $this->db->get();
        return $query->result_array();
    }
    function getCountryList()
    {
        $this->db->select('*')
            ->from('country');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertOrUpdateState($data,$is_update=0)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('stateId', $data['stateId']);
            if($this->db->update('state'))
            {
                return $data['stateId'];
            }else
            {
                return false;
            }
        }
        else {
            $this->db->insert('state');
            return $this->db->insert_id();
        }
    }
    public function insertOrUpdateCity($data,$is_update=0)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('cityId', $data['cityId']);
            if($this->db->update('city'))
            {
                return $data['cityId'];
            }else
            {
                return false;
            }
        }
        else {
            $this->db->insert('city');
            return $this->db->insert_id();
        }
    }
    public function insertOrUpdateArea($data,$is_update=0)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('areaId', $data['areaId']);
            if($this->db->update('area'))
            {
                return $data['areaId'];
            }else
            {
                return false;
            }
        }
        else {
            $this->db->insert('area');
            return $this->db->insert_id();
        }
    }
    function getCityDetailsByCityId($cityId)
    {
        $this->db->select('city.cityId,city.cityName,city.cityCode,state.stateName,country.countryName,city.countryId,city.stateId')
            ->from('city')
            ->join('state','state.stateId=city.cityId')
            ->join('country','country.CountryId=state.stateId')
            ->where('cityId', $cityId);
        $query = $this->db->get();
        return $query->row_array();
    }

    function getAreaDetailsByAreaId($areaId)
    {
        $this->db->select('area.areaId,area.areaName,area.areaCode,city.cityName,state.stateName,country.countryName,area.countryId,area.stateId,area.cityId')
            ->from('area')
            ->join('city','city.cityId=area.cityId')
            ->join('state','state.stateId=city.cityId')
            ->join('country','country.CountryId=state.stateId')
            ->where('areaId', $areaId);
        $query = $this->db->get();
        return $query->row_array();
    }
    function getCityListByStateId($stateId)
    {
        $this->db->select('city.cityId,city.cityName,city.cityCode')
            ->from('city')
            ->join('state','state.stateId=city.cityId')
            ->join('country','country.CountryId=state.stateId')
            ->where('city.stateId', $stateId);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getAreaListByCityId($areaId)
    {
        $this->db->select('area.areaId,area.areaName,area.areaCode,city.cityName,state.stateName,country.countryName,area.countryId,area.stateId,area.cityId')
            ->from('area')
            ->join('city','city.cityId=area.cityId')
            ->join('state','state.stateId=city.cityId')
            ->join('country','country.CountryId=state.stateId')
            ->where('areaId', $areaId);
        $query = $this->db->get();
        return $query->result_array();
    }
}