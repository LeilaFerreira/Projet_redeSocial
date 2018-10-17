<?php 
    session_start();

    // Apaga todas as variáveis da sessão
    $_SESSION = array();
    session_destroy();
    header("Location:home.php");

?>