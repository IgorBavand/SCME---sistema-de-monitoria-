<?php
//Incluir a conexão com banco de dados
session_start();
include ('../conexao/conexao.php');

$usuario = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//$usuario = "igorngs";

$query = "select * from usuario where usuario = '{$usuario}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['des_user'] = true;
	echo "Usuário já cadastrado!";
	exit();

}
?>























  