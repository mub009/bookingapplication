<?php
class StoreModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getStoreDetailsByStoreId($storeId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store.logo) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store.logo) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store.logo) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store.logo) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store.logo) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store.logo) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store.logo) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store.*")
                 ->from('store')
                 ->where('storeId', $storeId);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getStoreEmployeeByStoreEmployeeId($storeEmployeeId)
     {
    $base_url=base_url();
    $OGImage="CONCAT('${base_url}','assets/upload/image/',storemployee.profilePic) as profilePicOG,";
    $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',storemployee.profilePic) as profilePic20x20,";
    $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',storemployee.profilePic) as profilePic50x50,";
    $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',storemployee.profilePic) as profilePic100x100,";
    $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',storemployee.profilePic) as profilePic400x200,";
    $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',storemployee.profilePic) as profilePic800x600,";
    $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',storemployee.profilePic) as profilePic1200x800";
    $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
    $this->db->select("${image},store.themeGroup,store.is_multiLocation,store.is_duration,store.lockInMinutes,store.lockInHour,store.lockInDays,store.storeId,store.themeId,storemployee.*,country.timeZone as timeZone,country.countryName as countryName")
    ->join('store', 'store.storeId=storemployee.storeId', 'join')
    ->join('country', 'country.countryId=store.countryId', 'join')
    ->join('theme', 'store.themeId=theme.themeId', 'left')
    ->where(array('storemployee.storeEmployeeId' => $storeEmployeeId));
    $this->query = $this->db->get('storemployee');
     return $this->query->row_array();
    }
    public function InsertStoreWithEmployee($data,$is_update=0)
    {
        $this->db->trans_begin();
        $dataStore=array('storeName'=>$data['storeName'],'contact1'=>$data['contact1'],'contact2'=>$data['contact2'],'longitude'=>$data['longitude'],'latitude'=>$data['latitude'],'storeTelephone'=>$data['storeTelephone'],'storeAddress'=>$data['storeAddress'],'countryId'=>$data['countryId'],'stateId'=>$data['stateId'],'cityId'=>$data['cityId'],'areaId'=>$data['areaId'],'email'=>$data['email']);      
        $storeId=$this->UpdateOrInsertStore($dataStore);
        $dataStoreEmployee=array('createdDateTime'=>$data['createdDateTime'],'userName'=>$data['userName'],'password'=>$data['password'],'email'=>$data['employeeEmail']);
        if($this->InsertOrUpdateStoreEmployee($dataStoreEmployee))
        {   $this->db->trans_commit();
            return true;
        }
        else
        {
            $this->db->trans_rollback();
            return false;
        }
    }
    public function UpdateOrInsertStore($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeId', $data['storeId']);
            if($this->db->update('store'))
            {
                return $data['storeId'];
            }
        }
        else { 
            $this->db->insert('store'); 
            return $this->db->insert_id();
        }
    }
    public function InsertOrUpdateStoreEmployee($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeEmployeeId', $data['storeEmployeeId']);
            if($this->db->update('storemployee'))
            {
                return $data['storeEmployeeId'];
            }
        }
        else { 
            $this->db->insert('storemployee'); 
            return $this->db->insert_id();
        }
    }
    public function is_availableStoreEmployeeByUserName($userName)
    {
        $this->db->select('*')
                  ->where(array('storemployee.userName ' => $userName));
        $this->query = $this->db->get('storemployee');
        return ($this->query->num_rows()>0)?true:false;
    }
    public function getStoreList()
    {
        $this->db->select('*')
                 ->from('store')
                 ->where('is_deleted',0);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getStoreEmployeeDetailsByStoreEmployeeId($storeEmployeeId)
    {
        $this->db->select('*')
                  ->where(array('storemployee.storeEmployeeId'=>$storeEmployeeId));
        $this->query = $this->db->get('storemployee');
        return $this->query->row_array();
    }
 
    public function InsertStoreWithEmployeeByDealer($data,$is_update=0)
    {
        $this->db->trans_begin();
        $dataStore=array('dealerEmployeeId'=>$data['dealerEmployeeId'],'storeName'=>$data['storeName'],'contact1'=>$data['contact1'],'contact2'=>$data['contact2'],'longitude'=>$data['longitude'],'latitude'=>$data['latitude'],'storeTelephone'=>$data['storeTelephone'],'storeAddress'=>$data['storeAddress'],'countryId'=>$data['countryId'],'stateId'=>$data['stateId'],'cityId'=>$data['cityId'],'areaId'=>$data['areaId'],'email'=>$data['email']);      
        $storeId=$this->UpdateOrInsertStore($dataStore);
        $dataStoreEmployee=array('createdDateTime'=>$data['createdDateTime'],'userName'=>$data['userName'],'password'=>$data['password'],'email'=>$data['employeeEmail']);
        if($this->InsertOrUpdateStoreEmployee($dataStoreEmployee))
        {   $this->db->trans_commit();
            return true;
        }
        else
        {
            $this->db->trans_rollback();
            return false;
        }
    }
    public function insertOrUpdateStoreLocation($data,$is_update=0)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeLocationId', $data['storeLocationId']);
            if($this->db->update('store_location'))
            {
                return $data['storeLocationId'];
            }
        }
        else { 
            $this->db->insert('store_location'); 
            return $this->db->insert_id();
        }
    }
    public function decryptGetStoreLocationDetails($storeId,$encodeValue)
    {
          if($data=$this->getStoreLocationDetailsByStoreIdWithStoreLocationId($storeId,dataDecode($encodeValue))){
            return $data;
          }
          else{
            die('errorCode:1');
          }
    }
    public function multiLocationByStoreId($storeId)
    {
         if(count($this->getStoreLocationListByStoreId($storeId))>1)
         {
            $this->setMultiLocationByStoreId($storeId,1);
         }else{
            $this->setMultiLocationByStoreId($storeId,0);
         }
    }
    public function setMultiLocationByStoreId($storeId,$value)
    {
        $this->db->set(array('is_multiLocation'=>$value));
        $this->db->where('storeId', $storeId);
        return $this->db->update('store');
    }
    public function getStoreLocationDetailsByStoreIdWithStoreLocationId($storeId,$storeLocationId)
    {
        $this->db->select("store_location.*")
                 ->join('store','store.storeId=store_location.storeId')
                 ->where(array('store.storeId'=>$storeId,'store_location.storeLocationId'=>$storeLocationId));
        $this->query = $this->db->get('store_location');
        return $this->query->row_array();
    } 
    public function getStoreLocationListByStoreId($storeId)
    {
        $this->db->select("store_location.*")
                 ->join('store','store.storeId=store_location.storeId')
                 ->where(array('store_location.storeId'=>$storeId,'store_location.is_deleted'=>0));
        $this->query = $this->db->get('store_location');
        return $this->query->result_array();
    } 
    public function getStorProviderListByStoreId($storeId)
    {
        $this->db->select('*')
                 ->from('storemployee')
                 ->where(array('storemployee.is_deleted'=>0,'storemployee.storeId'=>$storeId,'storemployee.role'=>'serviceProvider'));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getStorProviderListWithAssignStoreServiceByStoreIdWith($storeId,$storeServiceId)
    {
        $this->db->select('storemployee.*,store_services_employee.storeServicesId as activeStoreServicesId')
                 ->from('storemployee')
                 ->join('store_services_employee','store_services_employee.storeEmployeeId=storemployee.storeEmployeeId','left')
                 ->where(array('storemployee.is_deleted'=>0,'storemployee.storeId'=>$storeId,'storemployee.role'=>'serviceProvider'));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getStoreListByDealerId($dealerId)
    {
        $this->db->select('*')
                 ->from('store')
                 ->join('dealeremployee','dealeremployee.dealerEmployeeId=store.dealerEmployeeId')
                 ->where(array('store.is_deleted'=>0,'dealeremployee.dealerId'=>$dealerId));
        $query = $this->db->get();
        return $query->result_array();
    }
 
    public function searchCategoriesByCategoriesNameInEnglish($categoriesName)
    {
        $this->db->select('*')
                    ->where(array('store_service_categories.categoryName_en'=>$categoriesName));
        $this->query = $this->db->get('store_service_categories');
        return $this->query->row_array();
    }
    public function searchCategoriesByCategoriesNameInArabic($categoriesName)
    {
        $this->db->select('*')
                    ->where(array('store_service_categories.categoryName_ar'=>$categoriesName));
        $this->query = $this->db->get('store_service_categories');
        return $this->query->row_array();
    }
    public function InsertOrUpdateStoreServiceCategories($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeServiceCategoriesId', $data['storeServiceCategoriesId']);
            if($this->db->update('store_service_categories'))
            {
                return $data['storeServiceCategoriesId'];
            }
        }
        else { 
            $this->db->insert('store_service_categories'); 
            return $this->db->insert_id();
        }
    }
    public function getCategoriesByShopId($shopId)
    {
        $base_url=base_url();
            $OGImage="CONCAT('${base_url}','assets/upload/image/',store_service_categories.img) as imgOG,";
            $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_service_categories.img) as img20x20,";
            $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_service_categories.img) as img50x50,";
            $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_service_categories.img) as img100x100,";
            $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_service_categories.img) as img400x200,";
            $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_service_categories.img) as img800x600,";
            $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_service_categories.img) as img1200x800";
            $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_service_categories.*")
                    ->where(array('store_service_categories.storeId'=>$shopId,'store_service_categories.deleted'=>0));
        $this->query = $this->db->get('store_service_categories');
        return $this->query->result_array();
    } 
    public function deleteCategories($storeServiceCategoriesId)
    {
        $this->db->set(array(
            'deleted'=>1
        ));
        $this->db->where('storeServiceCategoriesId', $storeServiceCategoriesId);
        if($this->db->update('store_service_categories'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCategoriesDetailsByStoreServiceCategoriesId($storeServiceCategoriesId)
    {
        $base_url=base_url();
            $OGImage="CONCAT('${base_url}','assets/upload/image/',store_service_categories.img) as imgOG,";
            $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_service_categories.img) as img20x20,";
            $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_service_categories.img) as img50x50,";
            $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_service_categories.img) as img100x100,";
            $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_service_categories.img) as img400x200,";
            $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_service_categories.img) as img800x600,";
            $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_service_categories.img) as img1200x800";
            $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_service_categories.*")
                    ->where(array('store_service_categories.storeServiceCategoriesId'=>$storeServiceCategoriesId));
        $this->query = $this->db->get('store_service_categories');
        return $this->query->row_array();
    } 
    public function hideOrShowCategoriesByStoreServiceCategoriesId($storeServiceCategoriesId,$is_visible)
    {
        $this->db->set(array(
            'is_visible'=>$is_visible
        ));
        $this->db->where('storeServiceCategoriesId', $storeServiceCategoriesId);
        if($this->db->update('store_service_categories'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getCategoriesByCategoriesIdWithShopId($shopId,$categoriesId)
    {
        $base_url=base_url();
            $OGImage="CONCAT('${base_url}','assets/upload/image/',store_service_categories.img) as imgOG,";
            $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_service_categories.img) as img20x20,";
            $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_service_categories.img) as img50x50,";
            $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_service_categories.img) as img100x100,";
            $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_service_categories.img) as img400x200,";
            $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_service_categories.img) as img800x600,";
            $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_service_categories.img) as img1200x800";
            $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_service_categories.*")
                    ->where(array('store_service_categories.storeId'=>$shopId,'store_service_categories.storeServiceCategoriesId'=>$categoriesId,'store_service_categories.deleted'=>0));
        $this->query = $this->db->get('store_service_categories');
        return $this->query->row_array();
    } 
    public function getStoreServiceByStoreServiceIdWithStoreId($storeId,$storeServiceId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store_services.img) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_services.img) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_services.img) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_services.img) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_services.img) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_services.img) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_services.img) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_services.*,store_service_categories.*")
                    ->join('store_service_categories','store_service_categories.storeServiceCategoriesId=store_services.storeServiceCategoriesId')
                    ->where(array('store_services.storeId'=>$storeId,'store_services.storeServicesId'=>$storeServiceId));
        $this->query = $this->db->get('store_services');
        return $this->query->row_array();
    } 
    public function getServiceByStoreId($storeId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store_services.img) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_services.img) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_services.img) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_services.img) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_services.img) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_services.img) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_services.img) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_services.*")
                    ->where(array('store_services.storeId'=>$storeId,'deleted'=>0));
        $this->query = $this->db->get('store_services');
        return $this->query->result_array();
    } 
    public function serviceDecrypt($storeId,$encodeValue)
    {
      if($storeServiceCategoriesId=dataDecode($encodeValue))
      {
        if(is_numeric($storeServiceCategoriesId)){
          if($data=$this->getStoreServiceByStoreServiceIdWithStoreId($storeId,$storeServiceCategoriesId)){
            return $data;
          }
          else{
            die('errorCode:3');
          }
        }else
        {
          die('errorCode:2');
        }
      }else
      {
        die('errorCode:1');
      }
    }
    public function InsertOrUpdateStoreService($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeServicesId', $data['storeServicesId']);
            if($this->db->update('store_services'))
            {
                return $data['storeServicesId'];
            }
        }
        else { 
            $this->db->insert('store_services'); 
            return $this->db->insert_id();
        }
    }
    
    public function addStoreServicesEmployee($storeServicesId,$storeEmployeeList)
    {
        $this->deleteStoreServicesEmployee($storeServicesId);
        foreach ($storeEmployeeList as $key => $storeEmployeeId) {
            $this->InsertStoreEmployeeByStoreServicesId($storeServicesId,$storeEmployeeId);
        }
    }
    public function InsertStoreEmployeeByStoreServicesId($storeServicesId,$storeEmployeeId)
    {
    $this->db->set(array('storeEmployeeId'=>$storeEmployeeId,'storeServicesId'=>$storeServicesId));
    $this->db->insert('store_services_employee'); 
    return $this->db->insert_id();
    }
    public function deleteStoreServicesEmployee($storeServicesId)
    {
        $this->db->where(array('storeServicesId'=>$storeServicesId));
        return $this->db->delete("store_services_employee");
    }
    public function deleteService($storeServicesId)
    {
        $this->db->set(array(
            'deleted'=>1
        ));
        $this->db->where('storeServicesId', $storeServicesId);
        if($this->db->update('store_services'))
        {
            $this->deleteStoreServicesEmployee($storeServicesId);
            return true;
        }
        else
        {
            return false;
        }
    }
    public function hideOrShowStoreServicesByStoreServicesId($storeServicesId,$is_visible)
    {
        $this->db->set(array(
            'is_visible'=>$is_visible
        ));
        $this->db->where('storeServicesId', $storeServicesId);
        if($this->db->update('store_services'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getOfferByStoreId($storeId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store_services.img) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_services.img) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_services.img) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_services.img) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_services.img) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_services.img) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_services.img) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_offers.*")
                 ->join('store_services','store_services.storeServicesId=store_offers.storeServicesId')
                 ->where(array('store_services.storeId'=>$storeId,'store_offers.deleted'=>0));
        $this->query = $this->db->get('store_offers');
        return $this->query->result_array();
    } 
    public function InsertOrUpdateStoreOffer($data,$is_update=false)
    {
        $this->db->set($data);
        if($is_update)
        {
            $this->db->where('storeOfferId', $data['storeOfferId']);
            if($this->db->update('store_offers'))
            {
                return $data['storeOfferId'];
            }
        }
        else { 
            $this->db->insert('store_offers'); 
            return $this->db->insert_id();
        }
    }
    public function getOfferByStoreIdWithStoreOfferId($storeId,$storeOfferId)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store_services.img) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_services.img) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_services.img) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_services.img) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_services.img) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_services.img) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_services.img) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store_offers.*")
                 ->join('store_services','store_services.storeServicesId=store_offers.storeServicesId')
                 ->where(array('store_services.storeId'=>$storeId,'store_offers.deleted'=>0,'store_offers.storeOfferId'=>$storeOfferId));
        $this->query = $this->db->get('store_offers');
        return $this->query->row_array();
    } 
    public function storeOfferDecrypt($storeId,$encodeValue)
    {
      if($storeOfferId=dataDecode($encodeValue))
      {
        if(is_numeric($storeOfferId)){
          if($data=$this->getOfferByStoreIdWithStoreOfferId($storeId,$storeOfferId)){
            return $data;
          }
          else{
            die('errorCode:3');
          }
        }else
        {
          die('errorCode:2');
        }
      }else
      {
        die('errorCode:1');
      }
    }
    public function deleteStoreOffer($storeOfferId)
    {
        $this->db->set(array(
            'deleted'=>1
        ));
        $this->db->where('storeOfferId', $storeOfferId);
        if($this->db->update('store_offers'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function storeDetailsByStoreSubDomainName($domainName)
    {
        $base_url=base_url();
        $OGImage="CONCAT('${base_url}','assets/upload/image/',store.logo) as imgOG,";
        $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store.logo) as img20x20,";
        $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store.logo) as img50x50,";
        $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store.logo) as img100x100,";
        $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store.logo) as img400x200,";
        $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store.logo) as img800x600,";
        $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store.logo) as img1200x800";
        $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
        $this->db->select("${image},store.*,theme.*,store_subdomain.*,storeactivatedtheme.*")
        ->from('store')
        ->join('theme','theme.themeId=store.themeId')
        ->join('store_subdomain','store.storeId=store_subdomain.storeId')
        ->join('storeactivatedtheme','store.storeId=storeactivatedtheme.storeId')
        ->where(array('store_subdomain.subDomain'=>$domainName));
        $query = $this->db->get();
        return $query->row_array();
    }
    public function updateLogoByStoreId($storeId,$logo)
    {
        $this->db->set(array(
            'logo'=>$logo
        ));
        $this->db->where('storeId', $storeId);
        if($this->db->update('store'))
        {
            return true;
        }else{
            return false;
        }
    }
   public function getSliderByShopId($shopId)
   {
    $base_url=base_url();
    $OGImage="CONCAT('${base_url}','assets/upload/image/',store_slider.image) as imgOG,";
    $Image20x20="CONCAT('${base_url}','assets/upload/image/20x20/',store_slider.image) as img20x20,";
    $Image50x50="CONCAT('${base_url}','assets/upload/image/50x50/',store_slider.image) as img50x50,";
    $Image100x100="CONCAT('${base_url}','assets/upload/image/100x100/',store_slider.image) as img100x100,";
    $Image400x200="CONCAT('${base_url}','assets/upload/image/400x200/',store_slider.image) as img400x200,";
    $Image800x600="CONCAT('${base_url}','assets/upload/image/800x600/',store_slider.image) as img800x600,";
    $Image1200x800="CONCAT('${base_url}','assets/upload/image/1200x800/',store_slider.image) as img1200x800";
    $image=$OGImage.$Image20x20.$Image50x50.$Image100x100.$Image400x200.$Image800x600.$Image1200x800;
    $this->db->select("${image},store_slider.*")
                ->where(array('store_slider.storeId'=>$shopId,'store_slider.is_deleted'=>0));
    $this->query = $this->db->get('store_slider');
    return $this->query->result_array();
   }
}