<?php
class MY_Controller extends CI_Controller
  {
 public $CountryId,$UserId,$StatusId,$OtpVerification,$UserTypeId,$UserMasterId,$Created_Time;
   public function __construct()
    {
        parent::__construct();
        $this->data['config_update'] = array('CopyRightBy'=>'My Zooba','Provider_By'=>'Mubashir');
    }

    public function generate_password($length = 20){
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                  '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
      
        $str = '';
        $max = strlen($chars) - 1;
      
        for ($i=0; $i < $length; $i++)
          $str .= $chars[random_int(0, $max)];
    
        return $str;
      }

    public function CurrentTimeAndDate($TimeZone='Asia/Kolkata')
    { 
       date_default_timezone_set(($TimeZone)?$TimeZone:'Asia/Kolkata'); 
       $this->data['currentDateAndTime']['dateAndTime'] = date('Y-m-d H:i:s');
       $ExplodeTimeAndDate=explode(' ',date('Y-m-d H:i:s'));
       $this->data['currentDateAndTime']['time']=$ExplodeTimeAndDate[0];
       $this->data['currentDateAndTime']['date']=$ExplodeTimeAndDate[1];
   }
    public function data_checking($value, $field_name)
    {
        return $this->formvalidation->exists($value, $field_name);
    }

    public function multi_data_checking($value, $field_name)
    {
        $explodedata = explode('.', $field_name);
        if ($this->Base_Model->query("SELECT * FROM $explodedata[0] WHERE $explodedata[1]='" . $value . "' and $explodedata[2]='" . $explodedata[3] . "' and StatusId!=3")) {
            return true;
        } else {
            $this->form_validation->set_message('multi_data_checking', $value . ' Not exists');
            return false;
        }
    }

    public function multi_data_checking_no_status($value, $field_name)
    {
        $explodedata = explode('.', $field_name);
        if ($this->Base_Model->query("SELECT * FROM $explodedata[0] WHERE $explodedata[1]='" . $value . "' and $explodedata[2]='" . $explodedata[3] . "'")) {
            return true;

        } else {
            $this->form_validation->set_message('multi_data_checking_no_status', $value . ' Not exists');
            return false;

        }

    }


    public function TimeZone($value)
    {
        if (date_default_timezone_set($value)) {
            return true;

        } else {
            $this->form_validation->set_message('Invalid Time Zone', $value . ' ');
            return false;

        }
    }
    public function ZeroValue($value)
    {
        if ($value!=0) {
            return true;

        } else {
            $this->form_validation->set_message('Invalid value', $value . ' ');
            return false;
        }
    }
    public function is_unique_multi_no_status($value, $field_name)
    {

        $explodedata = explode('.', $field_name);

        if ($this->Base_Model->query("SELECT * FROM $explodedata[0] WHERE $explodedata[1]='" . $value . "' and $explodedata[2]='" . $explodedata[3] . "'")) {
         
            $this->form_validation->set_message('is_unique_multi_no_status', $value . ' is not unique Mobile number');
    
            return false;

        } else {
            
            return true;
        }

    }


    
    public function is_mobile_number_checking_no_status($value, $CountryId)
    {

        if ($this->Base_Model->query("SELECT * FROM tbl_user_type WHERE MobileNo='" . $value . "' and CountryId='" . $CountryId . "'")) {
         
            $this->form_validation->set_message('is_mobile_number_checking_no_status', $value . ' Number Already exist');
    
            return false;

        } else {
            
            $countrydetails=$this->Base_Model->query("SELECT * FROM tbl_country WHERE Id='" . $CountryId . "'",'row_array');


            if(strlen($value) == $countrydetails['TotalMobileNumberDigits'])
            {
                return true;
            }
            else
            {
            ///ssss    
            $this->form_validation->set_message('is_mobile_number_checking_no_status', $value . ' Invalid Digit, Should be'.$countrydetails['TotalMobileNumberDigits'].' Digit');

            return false;
            }
         
        }

    }


    public function is_unique_no_status($value, $field_name)
    {

        $explodedata = explode('.', $field_name);

        if ($this->Base_Model->query("SELECT * FROM $explodedata[0] WHERE $explodedata[1]='" . $value . "'")) {

            $this->form_validation->set_message('is_unique', $value . ' Already Exist');
            return false;

        } else {

            return true;
        }

    }


    public function is_unique($value, $field_name)
    {

        $explodedata = explode('.', $field_name);

        if ($this->Base_Model->query("SELECT * FROM $explodedata[0] WHERE $explodedata[1]='" . $value . "'")) {

            $this->form_validation->set_message('is_unique', $value . ' Already Exist');
            return false;

        } else {

            return true;
        }

    }


    public function _passwordhash($password)
    {
        if ($password) {
            return password_hash($password, PASSWORD_DEFAULT);
        } else {
            return false;
        }
    }
   
   
      	/**
	 * Validate the password
	 *
	 * @param string $password
	 *
	 * @return bool
	 */
	public function valid_password($password = '')
	{
		$password = trim($password);
		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
		if (empty($password))
		{
			$this->form_validation->set_message('valid_password', 'The {field} field is required.');
			return FALSE;
		}
		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
			return FALSE;
		}
		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
			return FALSE;
		}
		if (strlen($password) < 5)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
			return FALSE;
		}
		if (strlen($password) > 32)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
			return FALSE;
		}
		return TRUE;
    }
}

require APPPATH . "core/web/backend/Admin_Controller.php";
require APPPATH . "core/web/backend/Store_Controller.php";
require APPPATH . "core/web/frontend/ThemeController.php";