<?php
    // Inicializando SESSÃO PHP
    session_start();

    $email = "lemuel@gmail.com";
    $senha = "1234";

    if ($email == $_POST['campo_email'] && $senha == $_POST['campo_senha']) {
        // Variável de SESSAO para controle de LOGIN
        $_SESSION['logado'] = 1;
        $_SESSION['adm'] = 1;

        header("Location: sistema.php");
    } else {
        // Variável de SESSAO para controle de LOGIN
        $_SESSION['logado'] = 0;
        
        header("Location: index.php");
    }    
?>