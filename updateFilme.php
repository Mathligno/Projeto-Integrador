<?php

    $idfilme = $_POST["idfilme"];
    $titulo = $_POST["titulo"];
    $sinopse = $_POST["sinopse"];
    $pais = $_POST["pais"];
    $linguagem = $_POST["linguagem"];
    $duracao = $_POST["duracao"];
    $ano = $_POST["ano"];
    $imagem = $_POST["imagem"];
    $video = $_POST["video"];

    $con = mysqli_connect("localhost", "root", "", "cafeteflix");

    //atualizão fisica 
    $sql= "update filmes set titulo = '$titulo' , sinopse = '$sinopse', pais = '$pais', linguagem = '$linguagem', duracao = '$duracao', ano = '$ano', imagem = '$imagem', video = '$video' where idfilme =  '$idfilme'";

    //echo $sql;

    mysqli_query($con, $sql);

    header("Location: listarFilme.php");
?>
<!-- segund aforma de fazer update -->
<!-- ALTER TABLE `filmes` CHANGE `titulo` `titulo` VARCHAR(101) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;  -->