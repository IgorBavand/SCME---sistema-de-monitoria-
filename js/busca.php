<?php
	//Incluir a conexão com banco de dados
	include_once('../conexao/conexao.php');
	
	//Recuperar o valor da palavra
	$cursos = $_POST['busca'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cursos = "SELECT * FROM monitoria WHERE nome_disciplina LIKE '%$cursos%'";
	$resultado_cursos = mysqli_query($conexao, $cursos);

?>
  
      <?php 
      while($dados = mysqli_fetch_assoc($resultado_cursos)){
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