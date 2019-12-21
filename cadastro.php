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
		

		
	</head>
	<body>
	

		<div class="container">
			<div class="text-center border" style="margin-top: 2%">
			<h1 style="color: white">Bem-Vindo ao SCME</h1>
			<p style="color: white; font-size: 15px; ">Sistema de Controle de Monitoria e Estudos</p>
		</div>
			<?php
			if (isset($_SESSION['ja_cadastrado'])) {
		?>
		<div class="alert alert-warning">
			Erro: usuário já cadastrado! 
		</div>
	
	<?php
	unset($_SESSION['ja_cadastrado']);
	 } ?>
	
	<div id="conteudo" class="d-flex justify-content-center h-100" style="margin-top: 3px">
	
		
			



<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Cadastro</h5>
           
           <form method="post" enctype="multipart/form-data" action="cadastrar.php">
<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="nome" class="form-control" placeholder="nome completo">
						
					</div>


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

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="csenha" class="form-control" placeholder="confirmar senha">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-book-reader"></i></span>
						</div>
						<input type="text" name="curso" class="form-control" placeholder="curso">
						
					</div>


				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text fas fa-camera" id="inputGroupFileAddon01"></span>
				  </div>
				  <div class="custom-file">
				    <input type="file" name="img1" class="custom-file-input" id="inputGroupFile01"
				      aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" for="inputGroupFile01">Selecione uma imagem</label>
				  </div>
				</div>
					
					<div class="form-group">
						<input type="submit" style="margin-top: 4%" value="Cadastrar" class="btn btn-lg btn-primary btn-block text-uppercase">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div id="menu" class="d-flex justify-content-center links">
					<a href="index.php">Já tem conta? Entre aqui</a>
				</div>
				
			</div>
		</div>
	</div>
</div>


          </div>
        
      
    </div>
  </div>
	</body>
</html>