<?php
include "conecta_mysql.inc";


$nome	=	$_POST("nome");
$sobrenome	=	$_POST("sobrenome");
$email	=	$_POST("email");

$sql	="INSERT INTO cadastro VALUES";
$sql	.= "('$nome','$sobrenome','$email')";
$resultado = mysql_query ($sql);
echo "Usuario incluido com sucesso!";


mysql_close($conexao);
?>