<?php 


session_start();
include('conexao/conexao.php');
include('controller/verifica_login.php');

$row = mysqli_num_rows($result);


//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
//Selecionar todos os cursos da tabela
$query = "select * from monitoria";
$resultado_curso = mysqli_query($conexao, $query);//Contar o total de cursos
$total = mysqli_num_rows($resultado_curso);
//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;
//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total / $quantidade_pg);
//Calcular o inicio da visualizacao
$incio = ($quantidade_pg * $pagina) - $quantidade_pg;
//Selecionar os cursos a serem apresentado na página
$result = "select * from monitoria limit $incio, $quantidade_pg";
$resultado = mysqli_query($conexao, $result);
$total = mysqli_num_rows($resultado);




?>
<section id="team" class="pb-5">
    <div class="container">
            <div class="row">
            <!-- Team member -->
            <?php 
      while($dados = mysqli_fetch_assoc($resultado)){
      ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/<?php echo $dados['foto_tutor'] ?>" alt="card image"></p>
                                    <h5 class="card-title text-uppercase"><?php echo $dados['nome_tutor']; ?></h5>
                                    <p style="font-size: 15px;" class="card-text text-uppercase"><?php echo $dados['nome_disciplina']; ?>.</p>
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

<?php
            //Verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>
            <div class="row d-flex justify-content-center" >
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <?php if ($pagina_anterior != 0) { ?>
                            <a class="page-link" href="home.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php } else { ?>
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        <?php } ?>
                    </li>
                    <?php
                    //Apresentar a paginacao
                    for ($i = 1; $i < $num_pagina + 1; $i++) {
                        ?>
                        <li class="page-item"><a class="page-link" href="home.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <?php if ($pagina_posterior <= $num_pagina) { ?>
                            <a class="page-link" href="home.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php } else { ?>
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
</div>