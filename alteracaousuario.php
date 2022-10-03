<?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $idusuario = $_POST["idusuario"];

    $con = mysqli_connect("localhost", "root", "", "cafeteflix");

    //atualizão fisica 
    $sql= "update usuarios set login = '" . $login . "', senha = '" . $senha . "' where idusuario = " . $idusuario;

    //echo $sql;

    mysqli_query($con, $sql);

    header("Location: listarUsuario.php");
?>