
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
      <h2 id="titulo">MINHAS MONITORIAS</h2>

      <hr>

      <?php if($row == 0){ ?>
        <h2 id="agendado">Você não tem nenhuma monitoria...</h2>
      <?php }else{ ?>



        <table class="table table-striped">
  <thead>
    <tr>
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

    <tr>
      
      <td><?php echo $dados['nome_disciplina']; ?></td>
      <td><?php echo $dados['assunto']; ?></td>
      <td><?php echo $dados['local']; ?></td>
      <td><?php echo $dados['data']; ?></td>
      <td><?php echo $dados['horario']; ?></td>
      <td><a class="btn btn-danger" href="controller/cancelar_monitoria.php?cancelar-monitoria=<?php echo $dados['id']; ?>">Cancelar</a></td>
    </tr>




   <?php } ?>
  </tbody>
</table>
<?php } ?>
     
    </div>