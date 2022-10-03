<?php

    include "conexao.php";

    if(isset($_POST['idfilme'])){
        $titulo = $_POST["titulo"];
        $sinopse = $_POST["sinopse"];
        $pais = $_POST["pais"];
        $linguagem = $_POST["linguagem"];
        $duracao = $_POST["duracao"];
        $ano = $_POST["ano"];
        $imagem = $_POST["imagem"];
        $video = $_POST["video"];

        // echo "O produto " . $produto . " de preco R$ " . $preco . " foi cadastrado.";

        $con = mysqli_connect("localhost", "root", "", "cafeteflix");

        $sql = "insert into filmes (titulo, sinopse, pais, linguagem, duracao, ano, imagem, video) values(' $titulo','$sinopse','$pais','$linguagem',' $duracao','$ano','$imagem ',' $video')";
        $incluir = mysqli_query($con, $sql);

        // header("Location: index.php");
        //saida - feedback ao usuário
        if($incluir){
            echo "
                <script>
                    alert('Filme cadastrado com sucesso!');
                    window.location = 'listarFilme.php';
                </script>
            ";
        }
        else{
            echo "
                <center>
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Sistema. </p>
                <center>
            ";
            echo mysqli_error($con);
        }
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='formularioFilme.php'>aqui</a> para incluir um Filme. </p>
    ";  
    }
?>