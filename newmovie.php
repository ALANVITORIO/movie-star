<?php
require_once("templates/header.php");
require_once("models/User.php");
require_once("dao/UserDAO.php");

//verifica autenticação do usuario

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);
?>
<div id="main-container" class="container-fluid">
  <div class="offset-md-4 col-md-4 new-movie-container">
    <h1 class="page-title">Adicionar Filme</h1>
    <p class="page-description">Adicione a sua critica e compartilhe com o mundo</p>
    <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="title">Titulo do filme</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do seu filme">
      </div>
      <div class="form-group">
        <label for="image">Imagem</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <div class="form-group">
        <label for="lenght">Duração</label>
        <input type="text" class="form-control" id="lenght" name="lenght" placeholder="Digite a duração do filme">
      </div>

      <div class="form-group">
        <label for="category">Categoria</label>
        <select class="form-control" id="category" name="category">
          <option value="Ação">Ação</option>
          <option value="Aventura">Aventura</option>
          <option value="Comédia">Comédia</option>
          <option value="Drama">Drama</option>
          <option value="Ficção Científica">Ficção Científica</option>
          <option value="Romance">Romance</option>
          <option value="Terror">Terror</option>
        </select>
      </div>

      <div class="form-group">
        <label for="trailer">Trailer</label>
        <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Digite o link do trailer">
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Digite a descrição do filme"></textarea>

      </div>
      <input type="submit" class="btn card-btn" value="adicionar filme">

  </div>
  </form>
</div>
</div>

<?php
require_once("templates/footer.php");
?>