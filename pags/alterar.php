<?php  
include_once '../controle/configbd.php';

$select = "SELECT * FROM tbadmin ORDER BY id DESC"; 

$Sresult = $conexao->query($select);

print_r($Sresult)
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
            <div>
                <table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">senha</th>
            <th scope="col">adm</th>
            <th scope="col">...</th>
        </tr>
    </thead>
            <tbody>
            <?php 
            while($usardata = mysqli_fetch_assoc($Sresult)){
            
                echo "<tr>";
                echo "<td>".$usardata['id']. "</td>";
                echo "<td>".$usardata['nome']. "</td>";
                echo "<td>".$usardata['email']. "</td>";
                echo "<td>".$usardata['senha']. "</td>";
                echo "<td>".$usardata['adm']. "</td>";
                echo "<td> <a class='bnt bnt-primary' href='edit.php?id=$usardata[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                </svg>
                </td>";
                echo "</tr>";
            }
            
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>