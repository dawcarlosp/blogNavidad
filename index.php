<?php
//Incluyo los archivos necesarios
require("./model/Animal.php");
require("./model/Usuario.php");
require("./model/Contenido.php");
//require("./controller/PerroController.php");
require("./controller/ContenidoController.php");


//Instancio el controlador
$controllerConte = new ContenidoController();
$base_url = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', $base_url);
//Ruta de la home
$home =  BASE_URL . "index.php/";
//Quito la home de la ruta de la barra de direcciones
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
//Creo el array de ruta (filtrando los vacíos)
$array_ruta = array_filter(explode("/", $ruta));
//Decido la ruta en función de los elementos del array
if (
    isset($array_ruta[0]) && $array_ruta[0] == "alta"
) {
    //Llamo al método ver pasándole la clave que me están pidiendo
    // $controller->ver($array_ruta[1]);
    $controllerConte->alta();
} else if (isset($array_ruta[0]) && $array_ruta[0] == "guardarAlta") {
    $controllerConte->guardarAlta();
}else if (isset($array_ruta[0]) && $array_ruta[0] == "login") {
    $controllerConte->mostrarFormLogin();
}else if(isset($array_ruta[0]) && $array_ruta[0] == "comprueba_login.php"){
    $controllerConte->validar();
}else if(isset($array_ruta[0]) && $array_ruta[0] == "cerrarSesion"){
    $controllerConte->cerrarSesion();
    $controllerConte->index();
}
else if(isset($array_ruta[0]) && $array_ruta[0] == "altaAnimal"){
    $controllerConte->mostrarFormAnimal();
}else if (isset($array_ruta[0]) && $array_ruta[0] == "guardarAltaAnimal") {
    $controllerConte->guardarAltaAnimal();
}else if (isset($array_ruta[0]) && $array_ruta[0] == "adoptar") {
    $controllerConte->adoptar();
} else {
    //Llamo al método por defecto del controlador
        
    $controllerConte->index();
}
