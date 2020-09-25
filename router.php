<?php

//Constante
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once "index.php";
require_once "database.php";

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: sumar/1/2 --> ['sumar', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        Home(); 
        break;
    case '': 
        Home(); 
        break;
    case 'insert': 
        InsertTask(); 
        break;
    case 'delete': 
        DeleteTask($params[1]); 
        break;
    case 'update': 
        UpdateTask($params[1]); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}
?>
