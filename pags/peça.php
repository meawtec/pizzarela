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
  <title>Pizzaria</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <a class="nav-link active" aria-current="page" href="criarPage.php">Criar</a>
        </li>
        <a class="nav-link active" aria-current="page" href="loginPage.php">Entrar</a>
        </li>
        <?php
          if ($ademiro) :
          ?>
            <a nome="alterar" id="alterar" class="nav-link active" aria-current="page" href="pags/alterar.php">Alterar</a>
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
          </h6>
          <br>
  </nav>

  <div class="divpeca">
    
    <div class="pnn">
      <h2>Escolha seu metodo de entrega</h2>      
  <div class="card divpeca">
    <div class="card-form pnn">
      <nav>
        <div class="nav nav-tabs border-dark" id="nav-tab" role="tablist">
          <button class="nav-link active " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Em casa</button>

          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Buscar</button>
        </div>
      </nav>

      <div class="tab-content border-dark" id="nav-tabContent">
        <div class="tab-pane fade show active text-bg-primary p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
          <p>fazendo o pedido aqui</p><br>

          <p>escolhendo quantidade de pizzas por aqui</p><br>

          <p>comendo aqui</p><br>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
          <p>fazendo o pedido aqui</p><br>

          <p>mostrando onde é a pizzaria</p><br>
        </div>

    </div>
  </div>




</body>

</html>