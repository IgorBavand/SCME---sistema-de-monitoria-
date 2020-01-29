<?php
session_start();
include('conexao/conexao.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SCME - Sistema</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
		-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		

<link rel="stylesheet" type="text/css" href="toastr/toastr.min.css">
  <script type="text/javascript" src="toastr/toastr.min.js"></script>



     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


		

		
		<style type="text/css">
			body{
				background-image: 
				url(fundo.jpg);
				background-size: 150px;
			}
		</style>
	</head>
	<body>

	
<?php if(isset($_SESSION['ja_cadastrado'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["warning"]("Você tentou cadastrar um nome de usuario já existente.","Erro");
        });
      </script>
    <?php unset($_SESSION['ja_cadastrado']); } ?>

<?php if(isset($_SESSION['senhas_diferentes'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["warning"]("Certifique-se de confirmar sua senha corretamente.","Erro");
        });
      </script>
    <?php unset($_SESSION['senhas_diferentes']); } ?>


		<div class="container">
			<div class="text-center border" style="margin-top: 2%; background-color: #000099">
			<h1 style="color: white">Bem-Vindo ao SCME</h1>
			<div class="border">
			<p style="color: white; font-size: 15px; ">Sistema de Controle de Monitoria e Estudos</p>
			</div>		
		</div>
			
	
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
						<input type="text" name="nome" class="form-control" required placeholder="nome completo">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="usuario" name="usuario" class="form-control" required placeholder="usuário">			
					</div>
					<div style="color: red; margin-top: 0%;" class="alerta_user">aqui</div>
						


					<script type="text/javascript">
						$(function(){
							$("#usuario").keyup(function(){
								
								var user = $(this).val();
								//alert(user);
							
								if(user != ''){
									var dados = {
										palavra : user
									}
									$.post('controller/ver_user_existente.php', dados, function(retorna){
										$(".alerta_user").html(retorna);
									});
							}else{
								$(".alerta_user").html('kmckdcnk');
							}
							});
						});
					</script>




					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="senha" name="senha" class="form-control" required placeholder="senha">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="csenha" name="csenha" class="form-control" required placeholder="confirmar senha">
					</div>
					<div class="conf_senha" style="color: red"></div>

					<script type="text/javascript">
						$(function(){
							$("#csenha").keyup(function(){
								//Recuperar o valor do campo
								var csenha = $(this).val();
								var senha = $("#senha").val();
								if(senha != csenha){
									$(".conf_senha").html("As senhas são diferentes");
									$("#botao").html('<input type="submit" style="margin-top: 4%" disabled value="Cadastrar" class="btn btn-primary btn-block text-uppercase">');
								}else{
									$(".conf_senha").html("");
									$("#botao").html('<input type="submit" style="margin-top: 4%" value="Cadastrar" class="btn btn-primary btn-block text-uppercase">');
								}
							});
						});
					</script>



					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-book-reader"></i></span>
						</div>
						<input type="text" name="curso" class="form-control" required placeholder="curso">
						
					</div>
					 <script>
            jQuery(function($){
            $("#curso").mask("99:99");
            
            });
        </script>


				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text fas fa-camera" id="inputGroupFileAddon01"></span>
				  </div>
				  <div class="custom-file">
				    <input type="file" name="img1" class="custom-file-input" required id="inputGroupFile01"
				      aria-describedby="inputGroupFileAddon01">
				    <label class="custom-file-label" for="inputGroupFile01">Selecione uma imagem</label>
				  </div>
				</div>

					<div class="form-group" id="botao">
						<input type="submit" style="margin-top: 4%" value="Cadastrar" class="btn btn-primary btn-block text-uppercase">
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


<script type="text/javascript" src="js/ver_user_existente.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

	</body>
</html>