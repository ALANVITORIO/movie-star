<?php

require_once('globals.php');
require_once('db.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Star</title>

  <link rel="short icon" href="/img/moviestar.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.css" integrity="sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
        <span id="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i>
      </button>

      <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar filmes" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div id="main-container" class="container-fluid">
    <h1>Corpo do site</h1>
  </div>

  <footer id="footer">
    <div id="social-container">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
      </ul>
    </div>
    <div id="footer-links-container">
      <ul>
        <li><a href="#">Adicionar filme</a></li>
        <li><a href="#">Adicionar Critica</a></li>
        <li><a href="#">Entrar / Registrar</a></li>
      </ul>
    </div>

    <p>&copy; 2023 - MovieStar</p>
  </footer>















  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.js" integrity="sha512-jxHTIcyuk3K/8tFI4UWP/2XfMAnBUL/GCcY0ah39DQfnsG8+YgtAJsOE8fznN+jWqwgLazJMEpmyE9HW1Mmc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




</body>

</html>