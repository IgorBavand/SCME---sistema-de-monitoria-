<?php
session_start();
include('conexao/conexao.php');

$id = $_SESSION['id'];

if(isset($_FILES['img'])){
    $extensao = strtolower(substr($_FILES['img']['name'], -4));
    
    $novo_nome = md5(time()) . $extensao;
    
    $diretorio = "img/";    

    move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);
}


$query = "update usuario set imagem = '{$novo_nome}' where id = '{$id}'";
$result = mysqli_query($conexao, $query);



$query_mon = "update monitoria set foto_tutor = '{$novo_nome}' where id_tutor = '{$id}'";
$result_mon = mysqli_query($conexao, $query_mon);



$_SESSION['foto'] = $novo_nome;
header('Location: home.php')


?>



