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
  <link href="../estilo/estilo3.css" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Pizzaria</title>

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
          if(!isset($_COOKIE['email'])) : 
          ?>
          <a class="nav-link active" aria-current="page" href="pags/criarPage.php">Criar</a>
          </li>
          <a class="nav-link active" aria-current="page" href="pags/loginPage.php">Entrar</a>
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
          </h6>
          <br>

      </div>
    </div>
  </nav>

  <div>
       
        <div class="container">
      <div class="row row-cols-auto">
        <div class="col">
          <img class="done" src="../imagens/redeye.jpg" alt="">
        </div>

        <div class="col">
          <h1>Combo Eye</h1>
         
<p>-Red Eye <br> -Pink Eye</p>
        </div>
      </div>
      <a class="comp" href="#">
        <button type="button" class="btn">R$ 22,50</button></a>
    </div>
  </div>

  <br>
  <div>
       
        <div class="container">
      <div class="row row-cols-auto">
        <div class="col">
          <img class="done" src="../imagens/panteravelha.jpeg" alt="">
        </div>
        
        <div class="col">
          <h1>Pantera velha</h1>
         
              
        </div>
      </div>
      <a class="comp" href="#">
        <button type="button" class="btn">R$ 22,50</button></a>
    </div>
  </div>

  <br>
  <div>
       
        <div class="container">
      <div class="row row-cols-auto">
        <div class="col">
          <img class="done" src="../imagens/corote.png" alt="">


        </div>
        <div class="col">
          <h1>Corote</h1>
        
        </div>
      </div>
      <a class="comp" href="#">
        <button type="button" class="btn">R$ 22,50</button></a>
    </div>
  </div>


</body>

</html>