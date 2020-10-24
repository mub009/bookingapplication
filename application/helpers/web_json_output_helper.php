<?php
defined('BASEPATH') or exit('No direct script access allowed');

function web_json_output($statusHeader, $response)
    {
        $ci = &get_instance();
        $obj = new stdClass;
        $obj->statusCode = $statusHeader;
        $obj->data = $response;
        $obj->token=$ci->security->get_csrf_hash();
        $ci->output->set_content_type('application/json');
        $ci->output->set_status_header(200);
        $ci->output->set_output(json_encode($obj, JSON_PRETTY_PRINT));
}
