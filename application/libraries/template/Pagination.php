<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagination
{

    private $data;
    private $CI;
      

    public function __construct()
      {
                  // Get the CodeIgniter reference

                  $this->CI = &get_instance();
  
      }

   public function config($dataConfig)
      {
        $config = array();
        
        $config["base_url"] = base_url() . $dataConfig['url'];
        
        $total_row = $this->pagination_model->record_count();
        
        $config["total_rows"] = $total_row;
        
        $config["per_page"] = 1;
        
        $config['use_page_numbers'] = TRUE;
        
        $config['num_links'] = $total_row;
        
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        
        $config['cur_tag_close'] = '</a>';
        
        $config['next_link'] = 'Next';

        $config['prev_link'] = 'Previous';

        $this->CI->pagination->initialize($config);
    
        if($this->CI->uri->segment(3)){
    
            $page = ($this->CI->uri->segment(3)) ;

          }
        else{

            $page = 1;
        }

        // $this->CI->load->$dataConfig['LoadModelName'];

        
        // $data["results"] = $this->CI->dataConfig['ModelName']->$dataConfig['ModelFunctionName']($config["per_page"], $page);


        $str_links = $this->CI->pagination->create_links();


        //$data["links"] = explode('&nbsp;',$str_links );
        


      }

}