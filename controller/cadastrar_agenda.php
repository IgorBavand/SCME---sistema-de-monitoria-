<?php
	session_start();
	include ('../conexao/conexao.php');
	if(isset($_GET['agendar'])){
		$id = $_GET['agendar'];
		$get_dados = "select * from monitoria where id = '{$id}'";
		$result_monitoria = mysqli_query($conexao, $get_dados);
		
		while ($dados = mysqli_fetch_assoc($result_monitoria)) {
			//echo $dados['nome_disciplina'];
			$usuario = $_SESSION['usuario'];
			$nome_disciplina = $dados['nome_disciplina'];
			$nome_tutor = $dados['nome_tutor'];
			$assunto = $dados['assunto'];
			$horario = $dados['horario'];
			$data = $dados['data'];
			$local = $dados['local'];
			$bloco = $dados['bloco'];
			$id_monitoria = $id;	
		}
		$query = "insert into agenda (usuario, nome_disciplina, nome_tutor, assunto, horario, data, local, bloco, id_monitoria) values ('{$usuario}', '{$nome_disciplina}', '{$nome_tutor}', '{$assunto}', '{$horario}', '{$data}', '{$local}', '{$bloco}', '{$id_monitoria}')";
		$result = mysqli_query($conexao,$query);
		$_SESSION['agendado'] = true;
		header('Location: ../home.php');
		exit();
		
		$row = mysqli_num_rows($result);
		//echo $row;
	}

?>