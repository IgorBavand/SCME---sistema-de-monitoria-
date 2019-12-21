<?php
session_start();
include('conexao/conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SCME - Sistema UFC</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
		-->

		<script
			  src="https://code.jquery.com/jquery-1.10.2.min.js"
			  integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg="
			  crossorigin="anonymous"></script>

			  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
		

<link rel="stylesheet" type="text/css" href="toastr/toastr.min.css">
  <script type="text/javascript" src="toastr/toastr.min.js"></script>
		<!--
		<script type="text/javascript">
			$(document).ready(function(){
				$("#menu a").click(function( e ){
					e.preventDefault();
					var href = $( this ).attr('href');
					$("#conteudo").load( href +" #conteudo")
				});
			});
		</script>
	-->
		<style type="text/css">
			body{
				background-image: 
				url(fundo.png);
				background-size: 70px;
			}
		</style>
	</head>
	<body background="css/fundo.png">
		

		<div class="container">
			<div class="text-center border" style="margin-top: 2%; background-color: #330066">
			<h1 style="color: white">Bem-Vindo ao SCME</h1>
			<p style="color: white; font-size: 15px; ">Sistema de Controle de Monitoria e Estudos</p>
		</div>
		
		  <?php if(isset($_SESSION['nao_autenticado'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["warning"]("Usuário e/ou senha incorreto(s).","Erro");
        });
      </script>
    <?php unset($_SESSION['nao_autenticado']); } ?>

	<?php if(isset($_SESSION['cadastro'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["success"]("Usuário cadastrado com sucesso.","Cadastrado");
        });
      </script>
    <?php unset($_SESSION['cadastro']); } ?>
	
	<div id="conteudo" class="d-flex justify-content-center h-100" style="margin-top: 3px">
		
		<div class="card">
			
			<div class="card-header">
				<h3>Entre ou cadastre-se</h3>
			</div>
			<div class="card-body">
				<form method="post" action="validacao_login.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="usuario" class="form-control" placeholder="usuário">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" class="form-control" placeholder="senha">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn btn-lg btn-primary btn-block text-uppercase">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#">Esqueceu a senha?</a>
				</div>
				<div id="menu" class="d-flex justify-content-center links">
				 <a href="cadastro.php">CADASTRE-SE</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
	</body>
</html>