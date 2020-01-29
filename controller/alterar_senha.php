<?php
session_start();
include('../conexao/conexao.php');

$id = $_SESSION['id'];
$senha = md5($_POST['senha']);
$csenha = md5($_POST['csenha']);
/*
echo $senha."\n\n";
echo $csenha."\n\n";
*/
if($senha != $csenha){
	$_SESSION['senhas_diferentes'] = true;
}else{

$query = "update usuario set senha = '{$senha}' where id = '{$id}'";
$result = mysqli_query($conexao, $query);
echo "deu certo";
}

?>