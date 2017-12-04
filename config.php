<?php

define('DBHOST', 'localhost');
define('DBNAME', 'tienpham_blog');
define('DBUSER', 'root');
define('DBPASSWORD', 'tiencntt94');
define('CSS_PATH', '/tpblog/assets/css/');
define('VENDOR_PATH', '/tpblog/assets/vendor/');
define('JS_PATH', '/tpblog/assets/js/');
define('ASSETS_PATH', '/tpblog/assets');

define('URL_ROOT', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && ! in_array(strtolower($_SERVER['HTTPS']), array( 'off', 'no' ))) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
define('SITE_PATH', __DIR__);
define('ROOT_FOLDER', '/tpblog');
define('ADMIN_PATH', __DIR__.'/admin');
define('ADMIN_VIEW_PATH', SITE_PATH.'/views/admin');