<?php
    session_start();
    $_SESSION["nome"] = $_REQUEST["nome"];
    $_SESSION["telefone"] = $_REQUEST["telefone"];
?>

<html>
    <a href="print.php">Link de acesso</a> 
</html>