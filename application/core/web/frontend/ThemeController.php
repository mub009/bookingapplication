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
        $this->load->view($this->data['storeDetails']['themeAssetsPath'].'header.php', $this->data);
        $this->load->view($this->data['storeDetails']['themeAssetsPath'] . $page, $this->data);
        $this->load->view($this->data['storeDetails']['themeAssetsPath'].'footer.php',$this->data);
    } 
}
?>
