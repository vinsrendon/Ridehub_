<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/src/request/request.php';

session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//USER ROUTES
$routes = [            
    
];

//ADMIN ROUTES
$routesAdmin =[
    
];

//GLOBAL ROUTES
$routesGlobal = [
    '/' => 'public/views/landing.php',
    '/register' => 'public/views/register.php',
    '/contact' => 'public/views/contact.php',
    '/about' => 'public/views/aboutUs.php',
    '/blogs' => 'public/views/blogs.php',
    '/policy' => 'public/views/privacyPolicy.php',
    '/terms' => 'public/views/terms.php'
];

if(isset($_SESSION['isLoggedin']) && isset($_SESSION['Role'])){
    if($_SESSION['user_id'] === '')
    {        
        unset($_SESSION['isLoggedin']);
        unset($_SESSION['user_id']);
        unset($_SESSION['Role']);
        header('location:/');
    }
    else{
        if($_SESSION['Role'] === 1 && array_key_exists($uri,$routesAdmin)){
            require $routesAdmin[$uri];
            die();
        }        
        else if($_SESSION['Role'] === 0 && array_key_exists($uri,$routes)){
            require $routes[$uri];
            die();
        }
        else if($_SESSION['Role'] === 1 && array_key_exists($uri,$routes) || $_SESSION['Role'] === 0 && array_key_exists($uri,$routesAdmin)){
            require 'public/403.php';
            die();
        }
        else{
            require 'public/404.php';
            die();
        }
    }
}
else{
    if(array_key_exists($uri,$routes) 
    || array_key_exists($uri,$routesAdmin)){
        require $routesGlobal['/'];
    }
    elseif(array_key_exists($uri,$routesGlobal)){
        require $routesGlobal[$uri];
    }
    else{
        require 'public/404.php';    
        die();
    }
}
