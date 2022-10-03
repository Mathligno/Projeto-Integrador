<?php 

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    //$idusuario = $_POST["idusuario"];

    include "conexao.php";

    $sql = "insert into usuarios (login, senha) values('$login', '$senha')";

    mysqli_query($con, $sql);

    //<a href="login.php">Login</a>
  include "planos.php";
    

?>