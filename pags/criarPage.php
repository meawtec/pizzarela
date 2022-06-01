<?php
if (isset($_POST['blogin'])) {

    include_once('../controle/configbd.php');

    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    
    echo $email;

    $sql = "SELECT * FROM tbadmin WHERE email = '$email'";
    $resulte = $conexao->query($sql);

        if ($resulte->num_rows > 0) {
            echo"<script language='javascript' type='text/javascript'>
            alert('Este email já esta em uso.');window.location
            .href='criarPage.php';</script>";
    
           // header('Location: criarPage.php');
            return;
        } else {
            setcookie("email", $email, time() + (86400 * 30), "/");
          //  echo "de boa chefia <br>";
            $result = mysqli_query($conexao, "INSERT INTO tbadmin(nome,email,senha) VALUES ('$nome','$email','$senha')");
           header('Location: ../index.php');
        }


    $conexao->close();

}




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Login</title>

    <script language="Javascript">
        function validacaoEmail(field) {
            usuario = field.value.substring(0, field.value.indexOf("@"));
            dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);
            if ((usuario.length >= 1) &&
                (dominio.length >= 3) &&
                (usuario.search("@") == -1) &&
                (dominio.search("@") == -1) &&
                (usuario.search(" ") == -1) &&
                (dominio.search(" ") == -1) &&
                (dominio.search(".") != -1) &&
                (dominio.indexOf(".") >= 1) &&
                (dominio.lastIndexOf(".") < dominio.length - 1)) {

                document.getElementById("msgemail").innerHTML = "E-mail válido";
                document.getElementById("form").onsubmit = (e) => e
            } else {
                document.getElementById("msgemail").innerHTML = "<font color='red'>Email inválido </font>";
                document.getElementById("form").onsubmit = (e) => {
                    e.preventDefault()
                }
            }
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/estiloLogin.css">

</head>

<body >
<a class="voltar" href="../index.php">
  <button class="volt">
          <h6>Voltar</h6> 
  </button>
</a>
    

<div class="div2login">

    <div class="divlogin">


        <h2 >Criar</h2>

        <form method="post" action="criarPage.php" name="f1" class="form">
            <input type="text" name="Nome" class="Nome" placeholder="Nome" required>
            <br><br>
            <input type="text" name="Email" class="Email" onblur="validacaoEmail(f1.email)" placeholder="Email" required>
            <br><br>
            <input type="password" name="Senha" class="Senha" placeholder="Senha" required>
            <br><br>
            <div class="afk">
            <input type="submit" name="blogin" class="blogin btn " value="Entrar">
 
            </div>
        </form>

        <div class="msgemail"></div>

    </div>
</div>

</body>

</html>