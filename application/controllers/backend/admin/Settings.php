<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Settings extends Admin_Controller
{
    public function index()
    {
        $this->data['title_nav_bar'] = array('home' => 'admin/dashboard');
        $this->data['title'] = 'settings';
        $this->template('settings', $this->data);
    }
}
