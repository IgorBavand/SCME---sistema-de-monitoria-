<?php
session_start();

include("conexao/conexao.php");


if(isset($_FILES['img1'])){
    $extensao = strtolower(substr($_FILES['img1']['name'], -4));
    
    $novo_nome = md5(time()) . $extensao;
    
    $diretorio = "img/";    

    move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome);
}


$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$curso = $_POST['curso'];

$query = "insert into usuario (nome, usuario, senha, curso, imagem) values ('{$nome}', '{$usuario}', '{$senha}', '{$curso}', '{$novo_nome}')";

$result = mysqli_query($conexao,$query); 


$_SESSION['cadastro'] = false;
header('Location: index.php');
exit();

?>