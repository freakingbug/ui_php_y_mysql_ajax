<?php

// Preparando el engine de templates
// Twig

// Forzamos a que no se muestren errores
ini_set("display_errors", 0);

// Incluimos Twig Auto Loader
require($root . 'php_libs/Twig/Autoloader.php');
Twig_Autoloader::register();

// Definimos la ruta donde estarán nuestros templates
$loader = new Twig_Loader_Filesystem($root . 'views');

// Inicializamos twig
$twig = new Twig_Environment($loader);

?>