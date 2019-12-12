<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>SCME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/home.css">
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
<script
			  src="https://code.jquery.com/jquery-1.10.2.min.js"
			  integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg="
			  crossorigin="anonymous"></script>

			  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
		
		
		<script type="text/javascript">
			$(document).ready(function(){
				$("#menu a").click(function( e ){
					e.preventDefault();
					var href = $( this ).attr('href');
					$("#conteudo").load( href +" #conteudo")
				});
			});
		</script>
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
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
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
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Minha agenda</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="cadastrar_monitoria.php">
              <i class="fa fa-calendar"></i>
              <span>Cadastrar monitoria</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
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

      <hr>
      <?php for($i = 0;$i <= 10;$i++){ ?>
      <div class="row d-flex justify-content-center border border-dark" id="posts">
        <div class="row d-flex justify-content-center form-group col-md-12">
          <div class="user-pics float-left" id="posts">
          	<ul id="desc">
          <img style="margin-top: 5%; float: left; width: 100px; height: 20px%" class="img-responsive img-rounded" src="img/<?php echo $_SESSION['foto'] ?>"
            alt="User picture">
            </ul>
      
			<div style="margin-top: 1px" class="text-left" id="desc">
        			<p>Linguagens de programaçao</p>
        			<p id="detalhes">POO com Python</p>    		
        			<p>Laboratŕio 1</p>
        			<p>15/09/2020 - 08:00</p>
        		<div style="margin-top: 5%; ">
				<a class="btn btn-primary float-none" style="font-size: 13px;" href="#">Agendar</a>            	
            </div> 
            </div> 
                   
        
        </div>

        </div>
       
      </div>
  <?php } ?>
     
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>