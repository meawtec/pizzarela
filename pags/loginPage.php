<?php

include_once '../controle/configbd.php';


    
  if (isset($_POST['entrar'])) {

    $emailL = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $db = mysqli_select_db($conexao, 'meaw');

    $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$emailL' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='loginPage.php';</script>";
        die();
      }else{
        setcookie("email",$emailL);
        header("Location:../index.php");
      }
  }

?>

<!DOCTYPE html>
<html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="loginPage.php">
<label>email:</label><input type="text" name="emailL" id="emailL"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="criarPage.php">Cadastre-se</a>
</form>
</body>
</html>