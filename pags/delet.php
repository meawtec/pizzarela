<?php
if (!empty($_GET['id'])) {

    include_once('../controle/configbd.php');

    $id = $_GET['id'];
    
    $sqlSeleect = "SELECT * FROM tbadmin WHERE id = '$id'";
    $sql = mysqli_query($conexao, $sqlSeleect);

    if($sql->num_rows > 0) {
        $sqlDelet = "DELETE FROM tbadmin WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelet);

        header("Location: alterar.php");
    }

}
?>