<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Vendorprivilege
 * @author: mubashir  * @phn:+91-9633871889
 * @author:(sub) raseel
 * @version: 1.0.0
 *
 *@extends:Admin_Controller
 *
 */

class Vendorprivilege extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

    }


 /**
 *@func showing Vendor privilege page
 *@param no param
 *author mubashir
 */

    public function index()
    {
        $this->_AdminPrivilegeChecking('VendorPrivilegeView');

        $this->data['title_nav_bar'] = array('Home' => 'backend/admin/dashboard', 'General' => 'backend/admin/general/area/area', 'Area' => 'backend/admin/general/area/area');

        $this->data['title'] = 'Vendor Privilege';
        //
        $this->template('privilege/vendorprivilege', $this->data);

    }

  
 /**
 *@func update vendor privilege 
 *@param no param
 *author mubashir
 */

    public function Update()
    {


        $permission = (String) json_encode($this->input->post('permission'));

        if ($this->Base_Model->update('tbl_usertypemaster', array('UserTypeId' => 44), array('permission' => $permission))) {
          
            json_output(200,'success');
        }
        else
        {
            
            json_output(400,'fail');

        }

    }

}
