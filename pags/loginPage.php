<?php

if(isset($_POST['blogin'])){

include_once('../controle/configbd.php');

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

$result = mysqli_query($conexao, "INSERT INTO tbadmin(nome,email,senha) VALUES ('$nome','$email','$senha')");
header('Location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Login</title>

</head>
<body>
<h2>Login</h2>

<form method="post" action="loginPage.php">
    <input type="text" name="Nome" ip="Nome" placeholder="Nome">
    <br>
    <input type="text" name="Email" ip="Email" placeholder="Email">
    <br>
    <input type="password" name="Senha" ip="Senha" placeholder="Senha">
    <br>
    <input type="submit" name="blogin" ip="blogin" value="Entrar">
</form>

</body>
</html>