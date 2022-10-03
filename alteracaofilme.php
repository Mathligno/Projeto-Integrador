<?php

    $titulo = $_POST["titulo"];
    $sinopse = $_POST["sinopse"];
    $pais = $_POST["pais"];
    $linguagem = $_POST["linguagem"];
    $duracao = $_POST["duracao"];
    $ano = $_POST["ano"];
    $imagem = $_POST["imagem"];
    $video = $_POST["video"];

    $idfilme = $_POST["idfilme"];

    $con = mysqli_connect("localhost", "root", "", "cafeteflix");

    //atualizão fisica 
    $sql= "update filmes set titulo = '" . $titulo . "' , sinopse = " . $sinopse . ", pais = " . $pais . ", linguagem = " . $linguagem . ", duracao = " . $duracao . ", ano = " . $ano . ", imagem = " . $imagem . ", video = '" . $video . "' where idfilme = " . $idfilme;

    //echo $sql;

    mysqli_query($con, $sql);

    header("Location: index.php");
?>