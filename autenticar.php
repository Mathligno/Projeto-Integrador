<?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    include "conexao.php";
 
    $sql = "select * from usuarios where login = '" . $login . "' and senha = '" . $senha . "'";
    //$sql = "select * from usuario";
        
    $resultado = mysqli_query($con, $sql);
    
    if ($linha = mysqli_fetch_array($resultado)){
        //echo "Bem vindo, ". $linha["login"];
        //echo "encontrado";
        session_start();
        $_SESSION["usuario_logado"] = $linha["login"];

        header("Location: home.php");
    } else {
        echo "<script> alert ('Usuário Inválido');
        window.location = 'login.php'; </script>";
        // echo "Usuário, ". $linha["login"] . " não encontrado";
    }
?>