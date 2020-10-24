<?php
class EmployeeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function is_availableAdminEmployeeByUserName($userName)
    {

        $this->db->select('*')
                  ->where(array('adminemployee.userName ' => $userName));
        $this->query = $this->db->get('adminemployee');
        return ($this->query->num_rows()>0)?true:false;
    }
    public function InsertOrUpdateEmployee($data,$is_update=0)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('adminEmployeeId', $data['adminEmployeeId']);
            if($this->db->update('adminemployee'))
            {
                return $data['adminEmployeeId'];
            }
        }
        else { 
            $this->db->insert('adminemployee'); 
            return $this->db->insert_id();
        }
    }
    public function getAdminEmployeeDetailsByAdminEmployeeId($adminEmployeeId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',adminemployee.profilePic) as profilePicOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',adminemployee.profilePic) as profilePic20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',adminemployee.profilePic) as profilePic50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',adminemployee.profilePic) as profilePic100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',adminemployee.profilePic) as profilePic400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',adminemployee.profilePic) as profilePic800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',adminemployee.profilePic) as profilePic1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select(" ${image},adminemployee.*,country.timeZone as timeZone,country.countryName as countryName,country.CountryId as CountryId")
                  ->join('admin', 'admin.adminId=adminemployee.adminEmployeeId', 'join')
                  ->join('country', 'country.countryId=admin.countryId', 'join')
                  ->where(array('adminemployee.adminEmployeeId ' => $adminEmployeeId));
        $this->query = $this->db->get('adminemployee');
        return $this->query->row_array();
    }
  

}