<?php

$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "meaw";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "erro";

}
else{
    echo "deu certo <br>";
}
?>