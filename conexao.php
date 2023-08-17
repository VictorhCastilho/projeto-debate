<?php

$servidor = "localhost";
$user = "root";
$senha = "";

$conn = new mysqli($servidor, $user, $senha);

if ($conn -> connect_error) 
{
    echo "Falha ao conectar-se ao MySQL: ". $conn -> connect_error;
    exit();
}
else?>
