<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|    https://codeigniter.com/user_guide/general/hooks.html
|
 */
$hook['display_override'] = array(
    'class' => 'CSRF_Protection',
    'function' => 'inject_tokens',
    'filename' => 'CSRF_Protection.php',
    'filepath' => 'hooks',
);


// hook for enable/disable profiling
// $hook['post_controller_constructor'] = array(
//     'class'    => 'ProfilerEnabler',
//     'function' => 'EnableProfiler',
//     'filename' => 'ProfilerEnabler.php',
//     'filepath' => 'hooks',
// );

