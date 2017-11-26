<?php

require_once ADMIN_PATH.'/controllers/'.$controller.'.php';

switch ($controller) {
    case 'post':
        $controller = new Post();
        require_once ADMIN_PATH.'/models/post.php';
        break;
    default:
        $controller = new Home();
        break;
}

$controller->{ $action }();