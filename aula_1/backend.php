<?php


//método $_GET

$username = $_POST["username"];
$password = $_POST["password"];

echo "O usuário {$username} está tentando logar. ";
echo "Com a senha {$password}.";

$nota1 = 6;
$nota2  =  8;

$media = ($nota1 + $nota2) / 2;

echo "A média das notas é {$media}";

// echo "Você executou o script no backend"; -- echo == print