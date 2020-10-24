<?php
defined('BASEPATH') or exit('No direct script access allowed');
function dataEncode($data)
    {
        $ci = &get_instance();
        return strtr($ci->encryption->encrypt($data),'+/=','-_~');
    }
function dataDecode($data)
    {
   $ci = &get_instance();
   return $ci->encryption->decrypt(strtr($data, '-_~', '+/='));
    }
