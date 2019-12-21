<?php 
session_start();
include('conexao/conexao.php');
include('controller/verifica_login.php');

$query = "select * from monitoria";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

 

 ?>


<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>SCME</title>
    <script type="text/javascript" src="js/busca.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/home.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<!-- page-wrapper -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
        
<script type="text/javascript">
	jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});




</script>


			  
		
		
		<script type="text/javascript">
			$(document).ready(function(){
				$("#menu a").click(function( e ){
					e.preventDefault();
					var href = $( this ).attr('href');
					$("#conteudo").load( href +" #conteudo")
				});
			});
		</script>


<link rel="stylesheet" type="text/css" href="toastr/toastr.min.css">
  <script type="text/javascript" src="toastr/toastr.min.js"></script>
    <script type="text/javascript" src="js/busca.js"></script>


</head>

<body>
 



<div class="page-wrapper chiller-theme toggled">

  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img style="width: 100%; height: 10%" class="img-responsive img-rounded" src="img/<?php echo $_SESSION['foto'] ?>"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name" style="text-transform: uppercase;">
          	<?php echo $_SESSION['nome']; ?>
          </span>
          <span class="user-role" style="text-transform: uppercase;">
          	<?php echo $_SESSION['curso']; ?>
          </span>
          
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
      	<div id="menu">
        <ul>
          
          <li class="header-menu">
            <span>Opções</span>
          </li>
          <li>
            <a href="home.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="agenda.php">
              <i class="fa fa-book"></i>
              <span>Minha agenda</span>
             
            </a>
          </li>
          <li>
            <a href="cadastrar_monitoria.php">
              <i class="fa fa-calendar"></i>
              <span>Cadastrar monitoria</span>
            </a>
          </li>
          <li>
            <a href="minhas_monitorias.php">
              <i class="fa fa-folder"></i>
              <span>Minhas monitorias</span>
            </a>
          </li>
          </ul>
      </div>
      <ul>
          <li>
            <a href="logout.php">
              <i class="fas fa-sign-out-alt"></i>
              <span>Sair</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
   
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
  
    <div id="conteudo" class="container-fluid">
      <h2 id="titulo">AULAS E MONITORIAS</h2>
      
        
            <form style="width: 100%;" method="post">
            <input type="text" name="busca" id="busca" class="form-control search-menu" placeholder="Procure por uma disciplina...">

          </form>
 
      <hr>

      <div class="resultado">
       
      <?php 
      while($dados = mysqli_fetch_assoc($result)){
      ?>
      <div class="" id="posts">
        <div class="row form-group col-md-12">
         
            <ul>
          
<img id="img" class="img-responsive float-left img-rounded img-thumbnail" src="img/<?php echo $dados['foto_tutor'] ?>"
            alt="User picture">
<div class="container-fluid float-left" style="width: 70%;">
            <p id="desc"> <?php echo $dados['nome_tutor']; ?> </p>
            <p id="desc"> <?php echo $dados['nome_disciplina']; ?> </p>
            <p id="desc"><?php echo $dados['assunto']; ?></p>
        		<p id="desc"><?php echo $dados['local']; ?> - Bloco <?php echo $dados['bloco'] ?></p>
        		<p id="desc" style="font-size: 17px;"><?php echo $dados['data']; ?> - <?php echo $dados['horario']; ?></p>
        
			</div>
        				
        
        		</ul>
        
        	<a class="btn btn-primary float-none" id="botao" href="controller/cadastrar_agenda.php?agendar=<?php echo $dados['id']; ?>">Agendar</a>
        
     
        </div>
      </div>
  
     <hr>
     <?php } ?>
    </div>
  </div>


        <?php if(isset($_SESSION['agendado'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["info"]("Monitoria adicionada a sua agenda.","Agendado");
        });
      </script>
    <?php unset($_SESSION['agendado']); } ?>


     <?php if(isset($_SESSION['cad_monitoria'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["success"]("Sua monitoria foi postada.","Nova monitoria");
        });
      </script>
    <?php unset($_SESSION['cad_monitoria']); } ?>


        <?php if(isset($_SESSION['canc_agenda'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["warning"]("Monitoria removida da sua agenda.","Cancelado");
        });
      </script>
    <?php unset($_SESSION['canc_agenda']); } ?>


      <?php if(isset($_SESSION['canc_monitoria'])){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          toastr["warning"]("Monitoria cancelada.","Cancelamento realizado");
        });
      </script>
    <?php unset($_SESSION['canc_monitoria']); } ?>
  </main>
  <!-- page-content" -->
</div>



    
</body>

</html>