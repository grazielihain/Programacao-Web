<?php

$class = $_GET['controller'];
$metodo = $_GET['acao'];

$class .= "Controller";

require_once $_SERVER['DOCUMENT_ROOT'] . "/aula_3/controller/EstudanteController.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/aula_3/controller/ProfessorController.php";

$controller = new $class();
$controller ->$metodo();


