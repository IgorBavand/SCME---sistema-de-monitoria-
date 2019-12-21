<?php 
session_start();
	include('../conexao/conexao.php');
		if(isset($_GET['cancelar-agendamento'])){
			$id = $_GET['cancelar-agendamento'];
			$query = "delete from agenda where id = '$id'";
			$result = mysqli_query($conexao, $query);
			$_SESSION['canc_agenda'] = true;
			header('Location: ../home.php');
			exit();
		//echo $_SESSION['canc_agenda'];
	}
?>