<?php
$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$dbname = "db_edjane";
//Sempre iniciado com $, tipo de variável;


//Criar a conexao. A variáven $conn recebe a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>