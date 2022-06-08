<?php
if (!empty($_GET['id'])) {

    include_once('../controle/configbd.php');

    $id = $_GET['id'];

    $sqlSeleect = "SELECT * FROM pizzas WHERE id = '$id'";
    $sql = mysqli_query($conexao, $sqlSeleect);

    $user = mysqli_fetch_assoc($sql);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['Nome'];
        $ingredientes = $_POST['Ingredientes'];
        $preco = $_POST['Preco'];
        

        $sqlUpdate = "UPDATE pizzas SET nome = '$nome', ingredientes = '$ingredientes', preco = '$preco' WHERE id = '$id' ";
        $sql = mysqli_query($conexao, $sqlUpdate);

        header('Location: alterarp.php');
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
        <a class="voltar" href="alterarp.php">Voltar</a>
    </button>


    <div class="div2login">   

        <div class="divlogin">


            <h2>Alterar</h2>

            <form method="post" action="editP.php?id=<?php echo $id ?>" name="f1" id="form">
            <div>Nome</div>
                <input type="text" name="Nome" class="Nome" placeholder="Nome" value="<?php echo $user['nome'] ?>" required>
                <br><br>
                <div>Ingredientes</div>
                <input type="text" name="Ingredientes" class="Email"  value="<?php echo $user['ingredientes'] ?>" placeholder="Ingredientes" required>
                <br><br>
                <div>Preço</div>
                <input type="text" name="Preco" class="Senha" placeholder="Preco" value="<?php echo $user['preco'] ?>" required>
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