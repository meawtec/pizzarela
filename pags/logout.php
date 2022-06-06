<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("email", null, 0, "/");
    header("Location: ../index.php");
}

?>