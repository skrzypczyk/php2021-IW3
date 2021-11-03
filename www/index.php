<?php


function myAutoloader( $class )
{
    if(file_exists("core/".$class.".class.php")){
        include "core/".$class.".class.php";
    }
}

spl_autoload_register("myAutoloader");

use App\Core\Security;

$fileRoutes = "routes.yml";

if(file_exists($fileRoutes)){
    $routes = yaml_parse_file($fileRoutes);
}else{
    die("Le fichier de routing n'existe pas");
}


$uri = $_SERVER["REQUEST_URI"];

if(empty($routes[$uri]) || empty($routes[$uri]["controller"]) || empty($routes[$uri]["action"])){
    die("Page 404");
}


if(!Security::checkRoute($routes[$uri])){
    die("NotAuthorized");
}


$controller = ucfirst(strtolower($routes[$uri]["controller"]));
$action = strtolower($routes[$uri]["action"]);




// $uri = /login
// $controller = User
// $action = login

$controllerFile = "controllers/".$controller.".class.php";
if(!file_exists($controllerFile)){
    die("Le fichier controller n'existe pas");
}

include $controllerFile;

if( !class_exists($controller)){
    die("La classe n'existe pas");
}

//   App\controllers\User ou App\controllers\Main .....
$objectController = new $controller();


if( !method_exists($objectController, $action) ){
    die("La methode n'existe pas");
}

$objectController->$action();


