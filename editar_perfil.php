<?php 
session_start();

include('conexao/conexao.php');
include('controller/verifica_login.php');
include('controller/ver_user_existente');



 ?>
<?php header("Content-type: text/html; charset=utf-8"); ?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />   
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>SCME</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
    
        
<script type="text/javascript" src="js/menu_lateral.js"></script>
    <!--<script type="text/javascript" src="js/menu.js"></script>-->


<link rel="stylesheet" type="text/css" href="toastr/toastr.min.css">
  <script type="text/javascript" src="toastr/toastr.min.js"></script>
<script type="text/javascript" src="js/busca.js"></script>

<script type="text/javascript" src="mask/dist/jquery.mask.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


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
        <ul>
        <li>
            <a href="home.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>
        </ul>
        <div id="menu">
        <ul>
          
          <li class="header-menu">
            <span>Opções</span>
          </li>
           <li>
            <a data-toggle="modal" data-target="#senha">
              <i class="fa fa-edit"></i>
              <span>Editar perfil</span>
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
      
   
      <div class="resultado">



<div id="conteudo" class="container-fluid">
  <?php 
include('conexao/conexao.php');
session_start();
$id_tutor = $_SESSION['id'];
$query = "select * from monitoria where id_tutor = '{$id_tutor}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

// echo $row;

 ?>
      <h2 id="titulo">MEU PERFIL</h2>

      <hr>
        
        <section id="team" class="pb-5">
    <div class="container">
            <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="">
                    <div class="">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/<?php echo $_SESSION['foto'] ?>" alt="card image"></p>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addUsuarioModal">
          Mudar foto
        </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="">
              <h5 style="font-size: 25px;">Dados pessoais</h5>
                


                <form method="post" enctype="multipart/form-data" action="controller/atualiza_dados.php">
<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>" class="form-control" required placeholder="nome completo">
            
          </div>


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" value="<?php echo $_SESSION['usuario']; ?>" id="usuario" name="usuario" class="form-control" required placeholder="usuário">     
          </div>
          <div style="color: red; margin-top: 0%;" class="alerta_user"></div>
       

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book"></i></span>
            </div>
            <input type="text" name="curso" value="<?php echo $_SESSION['curso']; ?>" class="form-control" required placeholder="curso">
            
          </div>


          <div class="form-group">
            <input type="submit" style="margin-top: 2%;" value="Atualizar dados" class="btn btn-outline-success">
          </div>
          

          <div class="form-group">
          <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#MudarSenha">
          Mudar senha
        </button>
          </div>


        </form>


            </div>
          </div>
        </div>
      </section>






<div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUsuarioModalLabel">Selecione outra foto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data" action="atualiza_foto.php" id="insert_form">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nova foto</label>
                <div class="col-sm-10">
                  <input style="height: 90%" name="img" type="file" required id="img">
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>







<div id="MudarSenha" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUsuarioModalLabel">Aterar senha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data" action="controller/alterar_senha.php" id="insert_form">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nova senha</label>
                <div class="col-sm-10">
                  <input name="senha" type="password" required id="senha">
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Confirmar nova senha</label>
                <div class="col-sm-10">
                  <input name="csenha" type="password" required id="csenha">
                   <div id="res" style="color: red"></div>
                </div>

              </div>

               <script type="text/javascript">
            $(function(){
              $("#csenha").keyup(function(){
                //Recuperar o valor do campo
                var csenha = $(this).val();
                var senha = $("#senha").val();
                if(csenha != senha){
                  $("#res").html("As senhas não estão iguais");
                  $("#botao").html('<input type="submit" name="cadUser" id="cadUser" value="Registrar nova senha" class="btn btn-outline-success" disabled> </input>');
                }else{
                  $("#res").html("");
                  $("#botao").html('<input type="submit" name="cadUser" id="cadUser" value="Registrar nova senha" class="btn btn-outline-success"> </input>');
                }
                
              });
            });
          </script>
              
              <div class="form-group row">
                <div class="col-sm-10" id="botao">
                  <input type="submit" name="CadUser" id="CadUser" value="Registrar nova senha" class="btn btn-outline-success">
                </div>
              </div>
              
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


            </form>
          </div>
        </div>
      </div>
    </div>
      
    </div>



    </div>
  </div>
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




<!-- SENHA PARA EDITAR PERFIL -->

    <div id="senha" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUsuarioModalLabel">Insira sua senha para ter acesso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="controller/verifica_senha.php" id="insert_form">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Senha:</label>
                <div class="col-sm-10">
                  <input style="height: 20px" name="senha" type="password" required id="img">
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" name="entrar" id="entrar" value="entrar" class="btn btn-outline-success">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>