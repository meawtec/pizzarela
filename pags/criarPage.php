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
        echo "<script language='javascript' type='text/javascript'>
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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/estiloLogin.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head>

<body>
    <a class="voltar" href="../index.php">
        <button class="volt">
            <h6>Voltar</h6>
        </button>
    </a>



    <div class="div2login">

        <h2>Criar</h2>

        <div class="divlogin">




            <form method="post" id="f1" action="criarPage.php" name="f1" class="form">
                <input type="text" name="Nome" class="Nome" placeholder="Nome" required>
                <br><br>
                <input type="email" name="Email" class="Email" placeholder="Email" required>
                <br><br>
                <label></label><input type="password" placeholder="Senha" name="Senha" id="senha" required>

                <button type="button" onclick="Toggle()" class="oi">
                    <svg id="cadiado" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </button>
        </div>

        <script>
            function Toggle() {
                var senha = document.getElementById("senha");
                if (senha.type === "password") {
                    senha.type = "text";
                } else {
                    senha.type = "password";
                }
            }
        </script>
        <div class="afk">
            <input type="submit" name="blogin" class="blogin btn " value="Entrar">

        </div>
        </form>

        <div class="msgemail"></div>

    </div>
    </div>

</body>

</html>