<?php

  if (isset($_POST['entrarL'])) {

    include_once '../controle/configbd.php';

    $emailL = $_POST['emailL'];
    $entrar = $_POST['entrarL'];
    $senha = ($_POST['senha']);
    $db = mysqli_select_db($conexao, 'meaw');

    $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$emailL' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='loginPage.php';</script>";
        die();
      }else{
        setcookie("email",$emailL,time() + (86400 * 30), "/");
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
<form id="form" method="POST" action="loginPage.php">
<label>email:</label><input type="text" name="emailL" id="emailL"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrarL" name="entrarL"><br>
<a href="criarPage.php" >Cadastre-se</a>
</form>
</body>
</html>