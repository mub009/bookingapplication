<?php
http_response_code(200);
echo json_encode(array('statusCode' => 503, 'data' => array('msg' => 'Not Secure Connection')));
?>