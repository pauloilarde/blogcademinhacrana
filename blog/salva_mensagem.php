<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$ip = $_SERVER["REMOTE_ADDR"];

	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, sobrenome, email, mensagem, created, ip) VALUES ('$nome', '$sobrenome', '$email', '$mensagem', NOW(), '$ip')";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato);
	
	echo "<script>alert('Obrigado!'); window.location = 'http://cademinhagrana.com/e-book-cademinhagrana.pdf'</script>";
	
	
	
?>
