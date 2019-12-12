<div id="conteudo" class="container-fluid">
      <h2 id="titulo">CADASTRAR MONITORIA</h2>

      <hr>
       <form method="post" enctype="multipart/form-data" action="cadastrar.php">
<div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="nome" class="form-control" placeholder="nome completo">
            
          </div>


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="usuario" class="form-control" placeholder="usuário">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="senha" class="form-control" placeholder="senha">
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="csenha" class="form-control" placeholder="confirmar senha">
          </div>


          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book-reader"></i></span>
            </div>
            <input type="text" name="curso" class="form-control" placeholder="curso">
            
          </div>


        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text fas fa-camera" id="inputGroupFileAddon01"></span>
          </div>
          <div class="custom-file">
            <input type="file" name="img1" class="custom-file-input" id="inputGroupFile01"
              aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Selecione uma imagem</label>
          </div>
        </div>
          
          <div class="form-group">
            <input type="submit" style="margin-top: 4%" value="Cadastrar" class="btn btn-lg btn-primary btn-block text-uppercase">
          </div>
        </form>
     
    </div>