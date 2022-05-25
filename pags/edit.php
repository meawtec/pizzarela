<?php
if (!empty($_GET['id'])) {

    include_once('../controle/configbd.php');

    $id = $_GET['id'];
    
    $sqlSeleect = "SELECT * FROM tbadmin WHERE id = '$id'";
    $sql = mysqli_query($conexao, $sqlSeleect);
    
    $user = mysqli_fetch_assoc($sql);

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];
        $admin = $_POST['Admin'] ?? 0;

        $sqlUpdate = "UPDATE tbadmin SET nome = '$nome', email = '$email', senha = '$senha', adm = '$admin' WHERE id = '$id' ";
        $sql = mysqli_query($conexao, $sqlUpdate);

        header('Location: ../index.php');
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

</head>

<body >
    <button id="volt2">
        <a id="voltar" href="../index.php">Voltar</a>
    </button>
    

    <div id="div2login">

        <div id="divlogin">


            <h2 >Criar/Entrar</h2>

            <form method="post" action="edit.php?id=<?php echo $id?>" name="f1" id="form">
                <input type="text" name="Nome" id="Nome" placeholder="Nome" value="<?php echo $user['nome'] ?>" required>
                <br><br>
                <input type="text" name="Email" id="Email" onblur="validacaoEmail(f1.email)" value="<?php echo $user['email'] ?>" placeholder="Email" required>
                <br><br>
                <input type="password" name="Senha" id="Senha" placeholder="Senha" value="<?php echo $user['senha'] ?>" required>
                <br><br>
                <label for="Admin">Admin:</label>
                <input type="checkbox" name="Admin" id="Admin" value="1" <?php echo $user['adm'] == 1 ? 'checked' : 'unchecked'; ?>>
                <br><br>
                <div id="afk">
                <input type="submit" name="blogin" id="blogin" class="btn " value="Entrar">

                </div>
            </form>

            <div id="msgemail"></div>

        </div>
    </div>

</body>

</html>