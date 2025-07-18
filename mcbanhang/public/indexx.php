<?php
$controllerName = $_GET['controller'] ?? 'front';
$action = $_GET['action'] ?? 'home';

$controllerClass = $controllerName . 'Controller';
require_once "./../controllers/{$controllerClass}.php";
$controller = new $controllerClass();
$controller->$action();
