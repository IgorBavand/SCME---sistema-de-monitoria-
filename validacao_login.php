<?php
session_start();
include('conexao/conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $nome;


if($row == 1){
	 while($dados = mysqli_fetch_assoc($result)){
$_SESSION['nome'] = $dados['nome'];
$_SESSION['curso'] = $dados['curso'];
$_SESSION['foto'] = $dados['imagem'];
$_SESSION['id'] = $dados['id'];
 } 
	$_SESSION['usuario'] = $usuario;
	header('Location: home.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
