<?php
/*
 * Class for enabling profiler through out the application
 *
 * @author: mubashir  * @phn:+91-9633871889
 * @version:1.0 
 */
class ProfilerEnabler
{
    /**
     * Holds CI instance
     *
     * @var CI instance
     */
    private $CI;
	public function __construct()
    {
		$this->CI = &get_instance();
		$this->CI->load->helper('url');
		

    }
	// enable or disable profiling based on config values
	function enableProfiler(){	
		
		if (!strstr($this->CI->router->fetch_method(),'ajaxAction_') ) {
			$this->CI->output->enable_profiler(config_item('enable_profiling'));				
		}
	}
}
?>