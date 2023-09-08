<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];
$controller .= "Controller";

require_once $_SERVER['DOCUMENT_ROOT'] . '/semipresencial_1/controller/'.$controller.'.php';

require_once $_SERVER['DOCUMENT_ROOT'] . "/semipresencial_1/controller/ProfessorController.php";

$objeto = new $controller();
$objeto ->$metodo();


