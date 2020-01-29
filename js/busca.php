<?php
//Incluir a conexão com banco de dados
include ('../conexao/conexao.php');

$nome_disciplina = filter_input(INPUT_POST, 'nome_disciplina', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM monitoria WHERE nome_disciplina LIKE '%$nome_disciplina%'";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){

?>
<?php 
      while($dados = mysqli_fetch_assoc($resultado_user)){
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
<?php }else{ 
  echo "nada encontrado";
}
?>























  