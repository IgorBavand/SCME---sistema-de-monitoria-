<?php 
include('conexao/conexao.php');


$query = "select nome_disciplina from disciplina order by nome_disciplina";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

 

 ?>

<div id="conteudo" class="container-fluid">
      <h2 id="titulo">CADASTRAR MONITORIA</h2>

      <hr>
       <form method="post" action="cadastro_monitoria.php">




<div class="input-group form-group">
        
    <label for="disciplina"></label>
     <div class="input-group-prepend">
              <span class="input-group-text">Selecione a disciplina: <i class=""></i></span>
            </div>
    <select class="form-control" id="disciplina" name="disciplina">
      <?php 
      while($dados = mysqli_fetch_assoc($result)){
      ?>
      <option><?php echo $dados['nome_disciplina']; ?></option>
    <?php } ?>
    </select>

          </div>



          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comments"></i></span>
            </div>
            <input type="text" name="assunto" class="form-control" placeholder="o que será debatido?">
            
          </div>


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <input type="text" name="local" class="form-control" placeholder="local">
            
          </div>
          
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <input type="number" name="bloco" class="form-control" placeholder="bloco">
            
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="date" name="data" class="form-control" placeholder="data">
          </div>


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-clock"></i></span>
            </div>
            <input type="text" name="horario" class="form-control" placeholder="horário">
            
          </div>


      
          
          <div class="form-group">
            <input type="submit" style="margin-top: 4%" value="Cadastrar" class="btn btn-lg btn-primary btn-block text-uppercase">
          </div>
        </form>
     
    </div>