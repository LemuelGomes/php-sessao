<?php

    session_start();
    $_SESSION['valida'] = 0;
    $_SESSION['adm'] = 0;

    $email = "lemuel@gmail.com";
    $senha = "1234";

        if($email == $_POST['campo_email'] && $senha == $_POST['campo_senha'])
        {                       
            $_SESSION['valida'] = 1;                
            header("Location: sistema.php");
        }
        else
        {
            header("Location: index.php");
        }
        
?>