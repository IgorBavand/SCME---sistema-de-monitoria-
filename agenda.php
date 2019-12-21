

<div id="conteudo" class="container-fluid">
  <?php 
include('conexao/conexao.php');
session_start();
$usuario = $_SESSION['usuario'];
$query = "select * from agenda where usuario = '{$usuario}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

// echo $row;

 ?>
      <h2 id="titulo">MINHA AGENDA</h2>

      <hr>

      <?php if($row == 0){ ?>
        <h2 id="agendado">Você não tem nada agendado...</h2>
      <?php }else{ ?>



        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tutor</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Assunto</th>
      <th scope="col">Local</th>
      <th scope="col">Data</th>
      <th scope="col">Horário</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
   <?php 
      while($dados = mysqli_fetch_assoc($result)){
      ?>

        <?php 
        $id_monitoria = $dados['id_monitoria'];
          $cons_monitorias = "select * from monitoria where id = '$id_monitoria'";
          $res = mysqli_query($conexao, $cons_monitorias);
          $verificacao = mysqli_num_rows($res);
          //echo $verificacao;
         ?>

    <?php if($verificacao ==1){ ?>
    <tr>
      <td><?php echo $dados['nome_tutor']; ?></td>
      <td><?php echo $dados['nome_disciplina']; ?></td>
      <td><?php echo $dados['assunto']; ?></td>
      <td><?php echo $dados['local']; ?></td>
      <td><?php echo $dados['data']; ?></td>
      <td><?php echo $dados['horario']; ?></td>
      <td><a class="btn btn-danger" href="controller/cancelar_agenda.php?cancelar-agendamento=<?php echo $dados['id']; ?>">Cancelar</a></td>
    </tr>
<?php }else{ ?>
   <tr>
      <td style="color: red"><?php echo $dados['nome_tutor']; ?></td>
      <td style="color: red"><?php echo $dados['nome_disciplina']; ?></td>
      <td style="color: red"><?php echo $dados['assunto']; ?></td>
      <td style="color: red"><?php echo $dados['local']; ?></td>
      <td style="color: red"><?php echo $dados['data']; ?></td>
      <td style="color: red"><?php echo $dados['horario']; ?></td>
      <td style="color: red">Cancelado</td>
    </tr>
<?php } ?>



   <?php } ?>
  </tbody>
</table>
<?php } ?>
     
    </div>