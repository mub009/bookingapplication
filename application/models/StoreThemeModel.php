<?php
class StoreThemeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insertOrUpdateStoreThemeDetails($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeThemeDetailsId', $data['storeThemeDetailsId']);
            if($this->db->update('storethemedetails'))
            {
                return $data['storeThemeDetailsId'];
            }
        }
        else { 
            $this->db->insert('storethemedetails'); 
            return $this->db->insert_id();
        }
    }
    public function getStoreThemeDetailsByThemeId($themeId,$inProperty='',$is_visible=false)
    {
        $url=base_url('assets/upload/image/');
        $selectQuery="CONCAT('${url}',storethemedetails.mediaOne) as sliderImage,CONCAT('${url}',storethemedetails.mediaOne) as image,CONCAT('${url}','100x100/',storethemedetails.mediaOne) as sliderImage100x100,";
        $this->db->select("${selectQuery} storethemedetails.*")
                 ->from('storethemedetails')
                 ->where(array('themeId'=>$themeId));
                 if($is_visible)
                 {
                    $this->db->where(array('is_visible'=>1));
                 }
                 if($inProperty!='')
                 {
                    $this->db->where_in('property',"$inProperty");
                 }
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getStoreThemeDetailsByStoreThemeDetailsId($storeThemeDetailsId)
    {
        $url=base_url('assets/upload/image/');
        $this->db->select("CONCAT('${url}',storethemedetails.mediaOne) as sliderImage,CONCAT('${url}',storethemedetails.mediaOne) as sliderImage,CONCAT('${url}','100x100/',storethemedetails.mediaOne) as sliderImage100x100,storethemedetails.*")
                 ->from('storethemedetails')
                 ->where(array('storeThemeDetailsId'=>$storeThemeDetailsId));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function delete($storeThemeDetailsId)
    {
        $this->db->where(array('storeThemeDetailsId'=>$storeThemeDetailsId));
        if ($this->db->delete('storethemedetails')) {
            return true;
        } else {
            return false;
        }
    }
    public function getContact($themeId)
    {
        $this->db->select('*')
        ->from('storethemedetails')
        ->where(array('storethemedetails.themeId'=>$themeId,'storethemedetails.property'=>'contact'));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getThemeListWithActiveThemeByStoreId($storeId)
    {
        $this->db->select('storeActivatedTheme.storeActivatedThemeId,theme.Name as Name,storeactivatedtheme.createdDateTime as createdDateTime,store.themeId as activeThemeId')
                    ->from('theme')
                    ->join('store',"store.themeId=theme.themeId and store.storeId=$storeId",'left')
                    ->join('storeActivatedTheme','theme.themeId=storeActivatedTheme.themeId')
                    ->where(array('theme.is_deleted'=>0,'storeActivatedTheme.storeId'=>$storeId));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getActiveThemeByStoreId($storeId)
    {
        $this->db->select('storeActivatedTheme.storeActivatedThemeId,storeActivatedTheme.themeId,theme.Name as Name,storeactivatedtheme.createdDateTime as createdDateTime,store.themeId as activeThemeId')
            ->from('theme')
            ->join('store',"store.themeId=theme.themeId and store.storeId=$storeId")
            ->join('storeActivatedTheme','theme.themeId=storeActivatedTheme.themeId')
            ->where(array('theme.is_deleted'=>0,'storeActivatedTheme.storeId'=>$storeId));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getBuyThemeListThemeByStoreId($storeId)
    {
        $this->db->select('theme.*,store.themeId as activeThemeId')
            ->from('theme')
            ->join('store',"store.themeId=theme.themeId and store.storeId=$storeId and store.themeGroup=theme.themeGroup")
            ->join('storeActivatedTheme','store.storeId=storeActivatedTheme.storeId','left')
            ->where(array('theme.is_deleted'=>0));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function decodeActiveThemeDetailsByStoreActivatedThemeId($storeActivatedThemeId)
    {
        if($data=$this->getActiveThemeDetailsByStoreActivatedThemeId(dataDecode($storeActivatedThemeId))){
            return $data;
        }else{
            die('errorCode:3');
        }
    }
    public function decodeThemeDetailsByThemeId($themeId)
    {
        if($data=$this->getThemeDetailsByThemeId(dataDecode($themeId))){
            return $data;
        }else{
            die('errorCode:3');
        }
    }
    public function getThemeDetailsByThemeId($themeId)
    {
        $this->db->select('theme.*')
            ->from('theme')
            ->where(array('theme.is_deleted'=>0,'theme.themeId'=>$themeId));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getActiveThemeDetailsByStoreActivatedThemeId($storeActivatedThemeId)
    {
        $this->db->select('storeActivatedTheme.storeActivatedThemeId,storeActivatedTheme.themeId,storeActivatedTheme.css,theme.Name as Name,storeactivatedtheme.createdDateTime as createdDateTime,store.themeId as activeThemeId')
            ->from('theme')
            ->join('store',"store.themeId=theme.themeId")
            ->join('storeActivatedTheme','theme.themeId=storeActivatedTheme.themeId')
            ->where(array('theme.is_deleted'=>0,'storeActivatedTheme.storeActivatedThemeId'=>$storeActivatedThemeId));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function InsertOrUpdateStoreActivatedTheme($data,$is_update=false)
        {
            $this->db->set($data);
            if($is_update)
            {
                $this->db->where('storeActivatedThemeId', $data['storeActivatedThemeId']);
                if($this->db->update('storeactivatedtheme'))
                {
                    return $data['storeActivatedThemeId'];
                }
            }
            else {
                $this->db->insert('storeactivatedtheme');
                return $this->db->insert_id();
            }
        }
    public function assignThemeToStoreByStoreId($data)
    {
        $this->db->set(array(
            'themeId'=>$data['themeId'])
        )->where('storeId', $data['storeId']);
        return $this->db->update('store');
    }
}
