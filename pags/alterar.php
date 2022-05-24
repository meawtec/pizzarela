<?php  
include_once '../controle/configbd.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="criarPage.php" name="f1" id="form">
                <input type="text" name="Nome" id="Nome" placeholder="Nome" required>
                <br><br>
                <input type="text" name="Email" id="Email" onblur="validacaoEmail(f1.email)" placeholder="Email" required>
                <br><br>
                <input type="password" name="Senha" id="Senha" placeholder="Senha" required>
                <br><br>
                <div id="afk">
                <input type="submit" name="blogin" id="blogin" class="btn " value="Entrar">

                </div>
            </form>
</body>
</html>