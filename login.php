<?php

    $email = "lemuel@gmail.com";
    $senha = "1234";

        if($email == $_POST['campo_email'] && $senha == $_POST['campo_senha'])
        {
            header("Location: sistema.php");
        }
        else
        {
            header("Location: index.php");
        }

?>