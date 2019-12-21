<?php 
session_start();
	include('../conexao/conexao.php');
		if(isset($_GET['cancelar-monitoria'])){
			$id = $_GET['cancelar-monitoria'];
			$query = "delete from monitoria where id = '$id'";
			$result = mysqli_query($conexao, $query);
			$_SESSION['canc_monitoria'] = true;
			header('Location: ../home.php');
			exit();
		//echo $_SESSION['canc_agenda'];
	}
?>