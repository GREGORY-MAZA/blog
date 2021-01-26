<?php
require_once 'config/database.php';

$map = [
    'home' => 'home.php',
    '404'=>'ressources/views/errors/404.php',
    'hobby' => 'hobby.php',

];
if (filter_has_var(INPUT_GET,'action')) {
    $action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!isset($map [$action])){
        $action = '404';
    }
}
else {
    $action='home';
}
$fichier = $map [$action];
include $fichier;