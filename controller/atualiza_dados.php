<?php
session_start();
include('../conexao/conexao.php');

$id = $_SESSION['id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$curso = $_POST['curso'];


$query = "update usuario set nome = '{$nome}', usuario = '{$usuario}', curso = '{$curso}' where id = '{$id}'";
$result = mysqli_query($conexao, $query);


$_SESSION['nome'] = $nome;
$_SESSION['usuario'] = $usuario;
$_SESSION['curso'] = $curso;
header('Location: ../editar_perfil.php')


?>



