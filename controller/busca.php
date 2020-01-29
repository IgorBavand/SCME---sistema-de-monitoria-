<?php
//Incluir a conexão com banco de dados
include ('../conexao/conexao.php');

$nome_disciplina = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM monitoria WHERE nome_disciplina LIKE '%$nome_disciplina%'";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){

?>
<section id="team" class="pb-5">
    <div class="container">
            <div class="row">
            <!-- Team member -->
            <?php 
      while($dados = mysqli_fetch_assoc($resultado_user)){
      ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/<?php echo $dados['foto_tutor'] ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $dados['nome_tutor']; ?></h4>
                                    <p class="card-text"><?php echo $dados['nome_disciplina']; ?>.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Detelhes da monitoria</h4>
                                    <p class="card-text">Assunto: <?php echo $dados['assunto']; ?></p>
                                    <p class="card-text"><?php echo $dados['local']; ?> - bloco <?php echo $dados['bloco']; ?></p>
                                    <p class="card-text"><?php echo $dados['data']; ?></p>
                                    <p class="card-text"><?php echo $dados['horario']; ?></p>

                                    <a class="btn border" href="controller/cadastrar_agenda.php?agendar=<?php echo $dados['id']; ?>">Agendar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php }else{ ?>
  <h3 style="color: #6699FF; font-family: times;">Nenhuma monitoria encontrada...</h3>

<?php } ?>























  