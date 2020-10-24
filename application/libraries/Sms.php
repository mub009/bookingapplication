<?php


/**
 * Sms
 *
 * @author: mubashir  
 * 
 * @phn:+91-9633871889
 *
 * @version: 1.0.0
 *
 *
 */


class Sms
{

private $CountryAdminMessageDetails;

private $swapUrl;

private $SMSUrl;

private $UserDetails;

  /**
   * message
   */

  protected $message;
  /**
   * @var Strings
   * store message contents like as otp
   */

  /**
   * Otp
   */

  protected $otp;
  /**
   * @var int
   * Store rand number
   */


  private $url;


  public function __construct()
  {
      $this->CI = &get_instance();

      $this->CI->load->model('Sms_Model');
    

  }



  public function OTP_service($CountryId,$MobileNumber)
  {
 

    if($this->_OTP_message($CountryId))
      {

        $this->SMSUrl =$this->_CreateSMSURL($CountryId,$MobileNumber, $this->_OTP_message($CountryId));

        $this->CI->Base_Model->CURL($this->SMSUrl);
  
      }

      return $this->otp;

  }

  private function _OTP_message($CountryId)
  {
   
    $this->CountryAdminMessageDetails=$this->SMSInformation($CountryId);
    

    if($this->CountryAdminMessageDetails['is_OTP'])
    {
        
      $this->otp=rand(1000, 9999);

      return "Your one time password is ".$this->otp." Please use this One Time Password(OTP) within the next one minutes to proceed.";
    }
    else
    { 
        $this->otp=1234;
        
        return false;
    }

}

  public function UserMessage($UserId,$message)
  {


    $this->UserDetails=$this->CI->Sms_Model->userDetails($UserId);
    
    $this->SMSUrl=$this->_CreateSMSURL($this->UserDetails['CountryId'],$this->UserDetails['MobileNo'],$message);

    $this->CI->Base_Model->CURL($this->SMSUrl);

  }


  public function Order($UserId,$message)
  {

    $this->UserDetails=$this->CI->Sms_Model->userDetails($UserId);
    
    if($this->UserDetails['is_order'])
    {
      $this->SMSUrl=$this->_CreateSMSURL($this->UserDetails['CountryId'],$this->UserDetails['MobileNo'],$message);

      $this->CI->Base_Model->CURL($this->SMSUrl);
  
    }

  }

  private function _CreateSMSURL($CountryId,$mobilenumber,$message)
  {

    $this->CountryAdminMessageDetails=$this->SMSInformation($CountryId);
    
    $this->url=str_replace("mobilenumber{}",urlencode($mobilenumber),$this->CountryAdminMessageDetails['url']);
   
    $this->_swapData();

    $this->url=str_replace("message{}",urlencode($message),$this->swapUrl);
 
    return $this->url;
  }


  private function _swapData()
  {
    
    $this->swapUrl=$this->url;

    $this->url=""; 
  }

  private function SMSInformation($CountryId)
  {
      
    return $this->CI->Sms_Model->SMSInformation($CountryId);
  }

}