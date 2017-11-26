<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '/var/www/html/tpblog/lib/database.php';

$conn = Database::connection();

if(isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'home';
    $action = 'index';
}

require_once ADMIN_VIEW_PATH.'/master.php';