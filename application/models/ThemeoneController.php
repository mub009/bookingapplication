<?php
class ThemeoneController extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getSliderByThemeId()
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
}
?>