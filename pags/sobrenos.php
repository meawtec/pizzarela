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

  <link href="../estilo/estilo1.css" rel="stylesheet">
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
          </form>
          <h6 class="gmail">
            <?php

            if (isset($_COOKIE['email'])) {
              echo $_COOKIE['email'];
            }


            ?>
          </h6>
          </h6>
          <br>

      </div>
    </div>
  </nav>

  <div>


  </div>

</body>

</html>