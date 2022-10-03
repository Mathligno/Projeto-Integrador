<?php 

    $num_card = $_POST["num_card"];
    $titular = $_POST["titular"];
    $vencimento = $_POST["vencimento"];
    $cpf = $_POST["cpf"];
    $cvv = $_POST["cvv"];

    include "conexao.php";

    //$idpagamento = $_POST["idpagamento"];

    $sql = "insert into pagamentos (num_card, titular, vencimento, cpf, cvv) values('" . $num_card . "', '" . $titular . "', '" . $vencimento . "', '" . $cpf . "', '" . $cvv . "')";

    mysqli_query($con, $sql);

    //<a href="login.php">Login</a>
    include "login.php";

?>