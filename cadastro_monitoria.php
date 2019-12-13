<?php
session_start();

include("conexao/conexao.php");

$id_tutor = $_SESSION['id'];

$foto_tutor = $_SESSION['foto'];

$nome_disciplina = $_POST['disciplina'];

$assunto = $_POST['assunto'];

$nome_tutor = $_SESSION['nome'];

$local = $_POST['local'];

$bloco = $_POST['bloco'];

$data = $_POST['data'];

$horario = $_POST['horario'];

$query = "insert into monitoria (id_tutor, foto_tutor, nome_disciplina, assunto, nome_tutor, local, bloco, data, horario) values ('{$id_tutor}', '{$foto_tutor}', '{$nome_disciplina}', '{$assunto}', '{$nome_tutor}', '{$local}', '{$bloco}', '{$data}', '{$horario}')";

$result = mysqli_query($conexao,$query);

header('Location: home.php');
exit();


?>