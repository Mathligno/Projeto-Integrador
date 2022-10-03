<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: green;
        }
    </style>
</head>
<body>
    <center>
    <?php
    //<p><input type="hidden" name="senha" value="<?php echo $linha["senha"]; ?_>"></p>
        //introduzir área de recadastrar uma senha
        //colocando esse comando em qualquer lugar do código vai altomaticamente rodar
        //o código da pag logado.php
        include "logado.php";

        //$idproduto = $_GET["id"];

        include "conexao.php";

        $con = mysqli_connect("localhost", "root", "", "cafeteflix");

        $sql = "select * from filmes where idfilmes = " . $idfilme;

        $resultado = mysqli_query($con, $sql);

        if($linha = mysqli_fetch_array($resultado)){
        //titulo, sinopse, pais, linguagem, duracao, ano, imagem, video
        //idusuario, login, senha, plano, nome, imagem

    ?>
        <h5>Alterar Usuários</h5>
        <form method="post" action="alteracaousuario.php">
            <?php echo "<img src='" . $linha["imagem"] .  "' width='100' height='100'>"; ?>
            <p> <input type="text" name="nome" value="<?php echo $linha["nome"]; ?>"> </p>
            <p> <input type="number" name="plano" step="0.01" value="<?php echo $linha["plano"]; ?>"> </p>
            <p> <input type="number" name="login" value="<?php echo $linha["login"]; ?>"> </p>
            <p> <input type="hidden" name="idusuario" value="<?php echo $linha["idusuario"]; ?>"> </p>
            <p> <input type="text" name="imagem" value="<?php echo $linha["imagem"]; ?>"> </p>
            <p> <input type="submit" value="Alterar"> </p>
        </form>

        <form method="POST" action="index.php">
        <p><input type="submit" value="Cancelar"></p>
        </form>

    <?php
    ?>
        <h5>Alterar Filmes</h5>
        <form method="post" action="alteracaofilme.php">
            <?php echo "<img src='" . $linha["imagem"] .  "' width='100' height='100'>"; ?>
            <?php echo "<img src='" . $linha["video"] .  "' width='100' height='100'>"; ?>
            <p> <input type="text" name="titulo" value="<?php echo $linha["titulo"]; ?>"> </p>
            <p> <input type="text" name="sinopse" value="<?php echo $linha["sinopse"]; ?>"> </p>
            <p> <input type="text" name="pais" value="<?php echo $linha["pais"]; ?>"> </p>
            <p> <input type="text" name="linguagem" value="<?php echo $linha["linguagem"]; ?>"> </p>
            <p> <input type="number" name="duracao" step="0.01" value="<?php echo $linha["duracao"]; ?>"> </p>
            <p> <input type="text" name="ano" value="<?php echo $linha["ano"]; ?>"> </p>
            <p> <input type="hidden" name="idfilme" value="<?php echo $linha["idfilme"]; ?>"> </p>
            <p> <input type="submit" value="Alterar"> </p>
        </form>
        //titulo, sinopse, pais, linguagem, duracao, ano, imagem, video

        <form method="POST" action="index.php">
        <p><input type="submit" value="Cancelar"></p>
        </form>

    <?php
    ?>
        <h5>Alterar Séries</h5>
        <form method="post" action="alteracaoserie.php">
            <?php echo "<img src='" . $linha["imagem"] .  "' width='100' height='100'>"; ?>
            <?php echo "<img src='" . $linha["video"] .  "' width='100' height='100'>"; ?>
            <p> <input type="text" name="titulo" value="<?php echo $linha["titulo"]; ?>"> </p>
            <p> <input type="text" name="sinopse" value="<?php echo $linha["sinopse"]; ?>"> </p>
            <p> <input type="text" name="pais" value="<?php echo $linha["pais"]; ?>"> </p>
            <p> <input type="text" name="linguagem" value="<?php echo $linha["linguagem"]; ?>"> </p>
            <p> <input type="number" name="duracao" step="0.01" value="<?php echo $linha["duracao"]; ?>"> </p>
            <p> <input type="text" name="ano" value="<?php echo $linha["ano"]; ?>"> </p>
            <p> <input type="hidden" name="idserie" value="<?php echo $linha["idserie"]; ?>"> </p>
            <p> <input type="submit" value="Alterar"> </p>
        </form>

        <form method="POST" action="index.php">
        <p><input type="submit" value="Cancelar"></p>
        </form>

    <?php } ?>
    </center>
</body>
</html>