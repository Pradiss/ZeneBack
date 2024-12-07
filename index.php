<?php 
session_start();

$request = trim(strtolower($_SERVER['REQUEST_URI']));

$request = str_replace("/integrador/zene/","",$request);

$segmentos = explode("/",$request);

$controlador = isset($segmentos[0]) ? $segmentos[0] : "home";
$metodo = isset($segmentos[1]) ? $segmentos[1] : "index";
$identificador = isset($segmentos[2]) ? $segmentos[2] : null;


switch($controlador){
    
    case "perfil":
        require "controllers/PerfilController.php";
        $controller = new PerfilController();
        break;
    case "login":

        require "controllers/LoginController.php";
        $controller = new LoginController();
        break;
    case "categoria":
        
        require "controllers/CategoriaController.php";
        $controller = new CategoriaController();
        break;
    case "home": 
        
        require "controllers/HomeController.php";
        $controller = new HomeController();
        break;
    case "sair": 
        require "controllers/SairController.php";
        $controller = new SairController();
        break;
    
    default:
        echo "Erro na Página";
        break;
}


if($identificador){
    $controller->$metodo($identificador);
}else{
    $controller->$metodo();
}