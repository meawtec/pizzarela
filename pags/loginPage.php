<?php

if (isset($_POST['entrarL'])) {

  include_once '../controle/configbd.php';

  $emailL = $_POST['emailL'];
  $entrar = $_POST['entrarL'];
  $senha = ($_POST['senha']);
  $db = mysqli_select_db($conexao, 'meaw');

  $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$emailL' AND senha = '$senha'") or die("erro ao selecionar");
  if (mysqli_num_rows($verifica) <= 0) {


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
</head>

<body>
  <a id="voltar" href="../index.php">
    <button id="volt">
      <h4>Voltar</h4>
    </button>
  </a>

  <div id="div2login">

    <div id="divlogin">
      <h1>Cadastrar</h1>

      <form id="form" method="POST" action="loginPage.php"><br>
        <label></label><input type="text" placeholder="Email" name="emailL" id="emailL"><br>
        <br>
        <div id="olho">
          <label></label><input type="password" placeholder="Senha" name="senha" id="senha"><img id="cadiado" src="../imagens/cadiado.png" alt="...">
          

        </div>

        <br>
        <br>
        <input type="submit" value="entrar" id="entrarL" name="entrarL"><br>
        <br>
        <a id="cadas" href="criarPage.php">Cadastre-se</a>
    </div>
  </div>



  </form>
</body>

</html>