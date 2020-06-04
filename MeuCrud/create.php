<?php 
//efetuando a conexão com o banco

require_once 'C:\wamp64\www\cursophp\CRUD\php_action\db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$github = mysqli_escape_string($connect, $_POST['github']);
	$linkedin = mysqli_escape_string($connect, $_POST['linkedin']);
//////////////////////////////////////////////////////////////////////
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	//$ativo = mysqli_escape_string($connect, $_POST['ativo']); 

	$sql = "INSERT INTO contatos(nome, telefone, email, github, linkein) VALUES ('$nome', '$telefone', '$email', '$github', '$linkedin')";
	$sql1 = "INSERT INTO usuarios(senhas) VALUES ('$senha')";

	if(mysqli_query($connect, $sql)):
		header('Location:index.php?sucesso');
	else:
		header('Location:index.php?erro');
	endif;
	
endif;
 ?>