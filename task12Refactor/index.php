<?php
    $request = $_SERVER['REQUEST_URI'];
    $url = "/php-task/task12Refactor";
    
    switch ($request) {
    
        case $url . '/':
            include('./index.php');
            break;
    
        case $url . '/home':
            include('./index.php');
            break;
    
        case $url . '/view':
            include('./controller/fetch.php');
            break;
    
        case $url . '/add':
            include('./controller/insert.php');
            break;
    
        default:
            // http_response_code(404);
            // include('./views/error.php');
    }
?>
