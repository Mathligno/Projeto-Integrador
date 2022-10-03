<?php
    //esse comando faz qualquer ação levar direto para a página de home
    if (isset($_SESSION["usuario_logado"])){
        header("Location: home.php");
    }
    // else {
    //     echo "
    //     window.location = 'home.php'; </script>";
    //     echo "Usuário, ". $linha["login"] . " não encontrado";
    // }
?>