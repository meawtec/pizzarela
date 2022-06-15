<?php
include_once '../controle/configbd.php';
$ademiro = false;

if (isset($_COOKIE['email'])) {
  $email = $_COOKIE['email'];
  $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$email'") or die("erro ao selecionar");
  if (mysqli_num_rows($verifica) > 0) {
    $user = mysqli_fetch_assoc($verifica);
    if (($user['adm'] == true)) {
      $ademiro = true;
    }
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  <link href="../estilo/estilo2.css" rel="stylesheet">

  <meta charset="UTF-8">
  <title>Pizzaria '-'</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">

      <a class="navbar-brand" href="../index.php">Pizzarela</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="peça.php">Peça online</a>
          </li>
          <a class="nav-link active" aria-current="page" href="cardapio.php">Cardapio</a>
          </li>
          <a class="nav-link active" aria-current="page" href="sobrenos.php">Sobre nos</a>
          </li>
          <?php
          if (!isset($_COOKIE['email'])) :
          ?>
            <a class="nav-link active" aria-current="page" href="criarPage.php">Criar</a>
            </li>
            <a class="nav-link active" aria-current="page" href=" loginPage.php">Entrar</a>
            </li>
          <?php
          endif
          ?>
          <?php
          if ($ademiro) :
          ?>
            <a nome="alterar" id="alterar" class="nav-link active" aria-current="page" href="alterar.php">Alterar</a>
            </li>

          <?php
          endif
          ?>

          <h6 class="gmail">


            <form class="d-flex">

            </form>
            <h6 class="gmail">
              <?php

              if (isset($_COOKIE['email'])) {
                echo $_COOKIE['email'];
              }



              ?>
              <?php
              if (isset($_COOKIE['email'])) :
              ?>

<form action="logout.php" method="POST">
              <button type="submit" class="logout" href="#" onclick="deleteCookies()">Logout</button>
            </form>
              <?php endif; ?>
            </h6>
           
            <br>
  </nav>

  <div class="divpeca">

    <div class="pnn ">
      <h2>Escolha seu metodo de entrega</h2>
      <div class="card divpeca">
        <div class="card-form pnn">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Em casa</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Buscar</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">WhatsApp</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <p class="dent">
              Ponha seu endereço:
              <br>TExto e mais <br>
              texto</p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <p class="dent">
              2TEXTO 
              <br>TExto e mais <br>
              texto</p>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
              <p class="dent">
              3TEXTO 
              <br>TExto e mais <br>
              texto</p>
            </div>
          </div>

        </div>
      </div>




</body>

</html>