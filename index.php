<?php
session_start();

// Autoload dependencies
require_once './vendor/autoload.php';
require_once './vendor/altorouter/altorouter/AltoRouter.php';

// Initialize AltoRouter
$router = new AltoRouter();
$router->setBasePath('/codoc');

// Define routes
//HOMEPAGE
$router->map('GET', '/', 'ControllerPost#home', 'home');

/*--------POST--------*/
//READ
$router->map('GET', '/post/[i:id]', 'ControllerPost#read', 'readPost');
//CREATE
$router->map('GET|POST', '/post/create', 'ControllerPost#create', 'createpost');
//DELETE
$router->map('GET', '/delete/[i:id_post]', 'ControllerPost#delete', 'deletepost');
//RANDOM POST
$router->map('GET', '/random', 'ControllerPost#random', 'randomPost');

/*--------USER--------*/
//USER
$router->map('GET|POST', '/login', 'ControllerUser#login', 'login');
$router->map('GET', '/logout', 'ControllerUser#logout', 'logout');
$router->map('POST', '/register', 'ControllerUser#register', 'register');
$router->map('GET', '/dashboard', 'ControllerUser#dashboard', 'dashboard');

/*--------AJAX--------*/

$router->map('GET', '/displayLike/[i:id_post]', 'ControllerPost#displayLike', 'displayLike');

$router->map('GET', '/likePost/[i:id_post]/[i:id_user]','ControllerPost#likePost', 'likePost');

//404
$router->map('GET', '/404', 'ControllerPost#notfound', 'notfound');

// Match the current request
$match = $router->match();

// Debugging: Output the matched route
// var_dump($match);

if (is_array($match)) {
    // Extract controller and action from the matched route
    list($controller, $action) = explode('#', $match['target']);

    // Check if the controller class exists
    if (class_exists($controller)) {
        $obj = new $controller();

        // Check if the action method is callable
        if (is_callable([$obj, $action])) {
            // Call the action method with parameters
            call_user_func_array([$obj, $action], $match['params']);
        } else {
            // Error: Action method not found
            echo "Error: Action '$action' not found in controller '$controller'.";
        }
    } else {
        // Error: Controller class not found
        echo "Error: Controller '$controller' not found.";
    }
} else {
    // Error: No route matched
    //echo "Error: No route matched.";
    header('Location: /codoc/404');
}