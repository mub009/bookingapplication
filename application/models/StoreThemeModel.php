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
        $this->db->select('theme.*,store.themeId as activeThemeId')
        ->from('theme')
        ->join('store',"store.themeId=theme.themeId and store.storeId=$storeId",'left')
        ->where(array('theme.is_deleted'=>0));
        $query = $this->db->get();
        return $query->result_array();
    }
 
}
?>