<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/


/*
| Improved routing, middleware support, authentication tools and more for CodeIgniter 3 framework
| https://packagist.org/packages/luthier/luthier
| https://github.com/ingeniasoftware/luthier-ci
*/
$hook = Luthier\Hook::getHooks([
    'modules' => ['debug']
]);