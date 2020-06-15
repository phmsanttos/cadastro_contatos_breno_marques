<?php 
//conectar com o banco

$servidor = "localhost:3306";
$username = "root";
$password = "";
$db_name = "crud_contatos_teste";

$connect = mysqli_connect($servidor, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;

 ?>