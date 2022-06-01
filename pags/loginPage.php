<?php

if (isset($_POST['entrarL'])) {

  include_once '../controle/configbd.php';

  $emailL = $_POST['emailL'];
  $entrar = $_POST['entrarL'];
  $senha = ($_POST['senha']);
  $db = mysqli_select_db($conexao, 'meaw');

  $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$emailL' AND senha = '$senha'") or die("erro ao selecionar");
  if (mysqli_num_rows($verifica) <= 0) {
    header("Location:loginPage.php");

    die();
  } else {
    setcookie("email", $emailL, time() + (86400 * 30), "/");
    header("Location:../index.php");
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../estilo/estiloLogin.css">
  <title> Login de Usuário </title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
  <a class="voltar" href="../index.php">
    <button class="volt">
      <h4>Voltar</h4>
    </button>
  </a>

  <div class="div2login">

    <div class="divlogin">
      <h1>Cadastrar</h1>

      <form class="form" method="POST" action="loginPage.php"><br>
        <label></label><input type="text" placeholder="Email" name="emailL" id="emailL"><br>
        <br>
        <div class="olho">
          <label></label><input type="password" placeholder="Senha" name="senha" id="senha"><img id="cadiado" src="../imagens/cadiado.png" alt="...">


        </div>

        <br>
        <br>
        <input type="submit" value="entrar" class="entrarL" name="entrarL"><br>
        <br>
        <a class="cadas" href="criarPage.php">Cadastre-se</a>
    </div>
  </div>



  </form>
</body>

</html>