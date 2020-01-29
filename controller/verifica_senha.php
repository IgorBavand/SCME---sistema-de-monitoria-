<?php 
session_start();
include('../conexao/conexao.php');
$id = $_SESSION['id'];
$senha = md5($_POST['senha']);

$query = "select * from usuario where id = '$id' and senha = '$senha'";
$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);


if($row == 1){

	header('Location: ../editar_perfil.php');


}else{
	echo "acess negado ";
}

?>