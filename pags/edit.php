<?php
if (!empty($_GET['id'])) {

    include_once('../controle/configbd.php');

    $id = $_GET['id'];

    $sqlSeleect = "SELECT * FROM tbadmin WHERE id = '$id'";
    $sql = mysqli_query($conexao, $sqlSeleect);

    $user = mysqli_fetch_assoc($sql);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];
        $admin = $_POST['Admin'] ?? 0;

        $sqlUpdate = "UPDATE tbadmin SET nome = '$nome', email = '$email', senha = '$senha', adm = '$admin' WHERE id = '$id' ";
        $sql = mysqli_query($conexao, $sqlUpdate);

        header('Location: alterar.php');
    }
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</head>

<body>
    <button class="volt2">
        <a class="voltar" href="alterar.php">Voltar</a>
    </button>


    <div class="div2login">   

        <div class="divlogin">


            <h2>Alterar</h2>

            <form method="post" action="edit.php?id=<?php echo $id ?>" name="f1" id="form">
                <input type="text" name="Nome" class="Nome" placeholder="Nome" value="<?php echo $user['nome'] ?>" required>
                <br><br>
                <input type="text" name="Email" class="Email" onblur="validacaoEmail(f1.email)" value="<?php echo $user['email'] ?>" placeholder="Email" required>
                <br><br>
                <input type="password" name="Senha" class="Senha" placeholder="Senha" value="<?php echo $user['senha'] ?>" required>
                <br><br>
                <label for="Admin">Admin:</label>
                <input type="checkbox" name="Admin" class="Admin" value="1" <?php echo $user['adm'] == 1 ? 'checked' : 'unchecked'; ?>>
                <br><br>
                <div class="afk">
                    <input type="submit" name="blogin" class="blogin btn" value="Alterar">

                </div>
            </form>

            <div id="msgemail"></div>

        </div>
    </div>

</body>

</html>