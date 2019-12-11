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
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
		-->
		<style type="text/css">
			body{
				background-color: blue;
			}

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/d/e/c/368192.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100vh;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 330px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFD700;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}div a{
	color: white;
}div a:hover{
	color: white;
}
		</style>
	</head>
	<body>

		<div class="container">
			<div class="text-center border" style="margin-top: 2%">
			<h1 style="color: white">Bem-Vindo ao SCME</h1>
			<p style="color: white; font-size: 15px; ">Sistema de Controle de Monitoria e Estudos</p>
		</div>
		<?php
			if (isset($_SESSION['nao_autenticado'])) {
		?>
		<div class="alert alert-warning">
			Erro: usuário e/ou senha inválido(s)
		</div>
	<?php
	unset($_SESSION['nao_autenticado']);
	 } ?>
	
	<div class="d-flex justify-content-center h-100" style="margin-top: 3px">
		
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
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#">Esqueceu a senha?</a>
				</div>
				<div class="d-flex justify-content-center links">
					Não tem conta? <a href="#">CADASTRE-SE</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
	</body>
</html>