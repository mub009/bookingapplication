<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ThemeController extends MY_Controller
{
    public $data = array();
    public $userInfo=array();
    public function __construct()
    {
        parent::__construct();
       
    }
    public function template($page = null)
    {
        $this->load->view('template/webiste/theme1/1/header.php', $this->data);
        $this->load->view('template/webiste/theme1/1/' . $page, $this->data);
        $this->load->view('template/webiste/theme1/1/footer.php',$this->data);
    } 
}
?>
