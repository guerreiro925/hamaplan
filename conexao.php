<?php

$banco = "eder";
$servidor = "localhost";
$usuario = "root";
$senha = "";

$conexao = mysql_connect($servidor, $usuario, $senha);
mysql_select_db($banco, $conexao);

?>