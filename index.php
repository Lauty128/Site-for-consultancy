<?php 

//include_once "controllers/routes.controller.php";
require "./routing.php";
//use controllers\Routes;


$router = new Router();

$router->add('/', function(){
    echo "Hola desde inicio";
});

$router->add('/quienes-somos', function(){
    echo "Hola desde quienes somos";
});

$router->add('/servicios', function(){
    echo "Hola desde servicios";
});

$router->add('/contacto', function(){
    echo "Hola desde contacto";
});

$router->run();








//include_once "config/dataBase.php";

// if(isset($Routes[$url])){
    //     include "views/templates/header.php";
    //     $Routes[$url]();
    // }
    // else{
        //     include_once "views/Error.php";
        // }
        
        
//$url = $_SERVER["REQUEST_URI"];