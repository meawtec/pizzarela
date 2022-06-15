<?php

if (isset($_POST['entrarL'])) {
  
  include_once '../controle/configbd.php';
  
  $emailL = $_POST['emailL'];
  $entrar = $_POST['entrarL'];
  $senha = ($_POST['senha']);
  $db = mysqli_select_db($conexao, 'meaw');
  
  $verifica = mysqli_query($conexao, "SELECT * FROM tbadmin WHERE email = '$emailL' AND senha = '$senha'") or die("erro ao selecionar");
  if (mysqli_num_rows($verifica) <= 0) {
    echo"<script language='javascript' type='text/javascript'>
    alert('email ou senha incorretos.');window.location
    .href='loginPage.php';</script>";
    // header("Location:loginPage.php");
    
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
<h1>Entrar</h1>

<form class="form" method="POST" action="loginPage.php"><br>
<label></label><input type="text" placeholder="Email" name="emailL" id="emailL"><br>
<br>

<div class="olho">
<label></label><input type="password" placeholder="Senha" name="senha" id="senha">

<button type="button" onclick="Toggle()" class="oi">
<svg id= "cadiado" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
</button>
</div>

<script>
function Toggle(){
  var senha = document.getElementById("senha");
  if(senha.type === "password") {
    senha.type = "text";
  }
  else {
    senha.type = "password";
  }
}

</script>

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