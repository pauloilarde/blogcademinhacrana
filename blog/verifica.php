<html>
<body>
<?php

$nome	=	$_POST("nome");
$sobrenome	=	$_POST("sobrenome");
$email	=	$_POST("email");
$erro	=0;

//VERIFICA CAMPO EM BRANCO
if(empty($nome) ==FALSE)
{echo "Favor digitar seu nome corretamente ex:Julius .<br>"; $erro=1;}

//VERIFICA CAMPO EM BRANCO
if(empty($sobrenome) ==FALSE)
{echo "Favor digitar seu sobrenome corretamente ex:Rock .<br>"; $erro=1;}

//VERIFICA CAMPO EM BRANCO
if(strlen($email)<8 ||  strstr($nome, '@')==FALSE)
{echo "Favor digitar seu email corretamente ex:Julius@cademinhagrana.com .<br>"; $erro=1;}

if($erro==0)
{echo "Dados gravados com sucesso!";
include "insere.inc";}

?>
</body>
</html>