<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note
{

    private $data;
    private $CI;
      

    public function __construct()
      {
  
          // Get the CodeIgniter reference
  
          $this->CI = &get_instance();
  
      }

      public function design($note)
      {
       
     
        $this->data['note']=$note;

        return  $this->CI->load->view('template/TemplateTools/note',$this->data,true);
      }  
}