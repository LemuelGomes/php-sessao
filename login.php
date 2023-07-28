<?php

    $email = "lemuel@gmail.com";
    $senha = "1234";
    $_SESSION['validacao'] = "Location: sistema.php";

        if($email == $_POST['campo_email'] && $senha == $_POST['campo_senha'])
        {
            session_start();
            
            $_SESSION['validacao'] = "Location: sistema.php";                
            header("Location: sistema.php");
        }
        else
        {
            header("Location: index.php");
        }
        
?>