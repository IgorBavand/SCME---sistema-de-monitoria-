<?php
session_start();

include("conexao/conexao.php");


$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$csenha = md5($_POST['csenha']);
$curso = $_POST['curso'];



$consulta = "select * from usuario where usuario = '{$usuario}'";

$verificacao = mysqli_query($conexao, $consulta);

$row = mysqli_num_rows($verificacao);

//echo $row;

if(isset($_FILES['img1'])){
    $extensao = strtolower(substr($_FILES['img1']['name'], -4));
    
    $novo_nome = md5(time()) . $extensao;
    
    $diretorio = "img/";    

    move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome);
}


if($row == 1){
	$_SESSION['ja_cadastrado'] = true;
	header('Location: cadastro.php');
	exit();
	//echo $row;
}else if($senha != $csenha){
	$_SESSION['senhas_diferentes'] = true;
	header('Location: cadastro.php');
	exit();
}

else{	
$query = "insert into usuario (nome, usuario, senha, curso, imagem) values ('{$nome}', '{$usuario}', '{$senha}', '{$curso}', '{$novo_nome}')";
$result = mysqli_query($conexao,$query); 
$_SESSION['cadastro'] = false;
//echo $row;
header('Location: index.php');
exit();
}

?>