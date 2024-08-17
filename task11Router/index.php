<?php
    $request = $_SERVER['REQUEST_URI'];
    $url = "/php-task/task11Router";
    
    switch ($request) {
    
        case $url . '/':
            include('./views/home.php');
            break;
    
        case $url . '/home':
            include('./views/home.php');
            break;
    
        case $url . '/about':
            include('./views/about.php');
            break;
    
        case $url . '/contact':
            include('./views/contact.php');
            break;
    
        default:
            http_response_code(404);
            include('./views/error.php');
    }
?>