<?php

/**
 * CSRF Protection Class
 */
class CSRF_Protection
{
    /**
     * Holds CI instance
     *
     * @var CI instance
     */
    private $CI;

    /**
     * Name used to store token on session
     *
     * @var string
     */
    private static $token_name = 'li_token';

    /**
     * Stores the token
     *
     * @var string
     */
    private static $token;

    // -----------------------------------------------------------------------------------

    public function __construct()
    {
        $this->CI = &get_instance();

    }

    public function inject_tokens()
    {

        $output = $this->CI->output->get_output();

        $csrf = array(
            'name' => $this->CI->security->get_csrf_token_name(),
            'hash' => $this->CI->security->get_csrf_hash(),
        );

        // Inject into form
        $output = preg_replace(
            '/(<(form|FORM)[^>]*(method|METHOD)="(post|POST)"[^>]*>)/',
            '$0<input type="hidden" name="' . $csrf['name'] . '" value="' . $csrf['hash'] . '">',
            $output
        );

        // Inject into <head>
        $output = preg_replace(
            '/(<\/head>)/',
            '<meta name="csrf-name" content="' . $csrf['name'] . '">' . "\n" . '<meta name="csrf-token" content="' . $csrf['hash'] . '">' . "\n" . '$0',
            $output
        );

        // Inject into <script in head>

        $output = preg_replace('/(<\/html>)/', "<script>
                    $(document).ready(function () {

                    $.ajaxSetup({
                            beforeSend: function (jqXHR, Obj) {

                                Obj.data += '&serverToken=' + $('input[name=" . 'serverToken' . "]').val();
                            }
                        });

                    });
                </script>", $output);
        if (!strstr($this->CI->router->fetch_method(),'withOutCSRF_') ) {
			$this->CI->output->_display($output);				
        }
        else
        {
        $this->CI->output->_display();
        }
    }

}
