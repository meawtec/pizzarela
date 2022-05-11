<?php

if (isset($_POST['blogin'])) {

    include_once('../controle/configbd.php');

    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];



    

    $sql = "SELECT email FROM tbadmin";
    $resulte = $conexao->query($sql);

        if ($resulte->num_rows > 0) {
        
            while ($row = $resulte->fetch_assoc()) {
            echo "email: " . $row["email"] . "<br>";

                if($email == $row["email"]) {
                        echo "esse email ja existe <br>";
                        header('Location: loginPage.php');
                }
                else{
                    echo "de boa chefia <br>";
                    $result = mysqli_query($conexao, "INSERT INTO tbadmin(nome,email,senha) VALUES ('$nome','$email','$senha')");
                    header('Location: ../index.php');
                }


         }


         } else {
         echo "0 results";
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

<body style="backgraound-image: linear-grandient(45deg, blue, green );">


    <div id="div2login">

        <div id="divlogin">


            <h2 >Criar/Entrar</h2>

            <form method="post" action="loginPage.php" name="f1" id="form">
                <input type="text" name="Nome" id="Nome" placeholder="Nome" required>
                <br><br>
                <input type="text" name="Email" id="Email" onblur="validacaoEmail(f1.email)" placeholder="Email" required>
                <br><br>
                <input type="password" name="Senha" id="Senha" placeholder="Senha" required>
                <br><br>
                <input type="submit" name="blogin" id="blogin" class="btn " value="Entrar">
            </form>

            <div id="msgemail"></div>

        </div>
    </div>

</body>

</html>