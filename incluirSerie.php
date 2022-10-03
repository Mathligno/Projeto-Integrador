<?php

    include "conexao.php";

    if(isset($_POST['idserie'])){
        $titulo = $_POST["titulo"];
        $sinopse = $_POST["sinopse"];
        $pais = $_POST["pais"];
        $linguagem = $_POST["linguagem"];
        $duracao = $_POST["duracao"];
        $ano = $_POST["ano"];
        $imagem = $_POST["imagem"];
        $video = $_POST["video"];
        
        //processamento - incluir no banco de dados
        $sql = "insert into series (titulo, sinopse, pais, linguagem, duracao, ano, imagem, video) values(' $titulo','$sinopse','$pais','$linguagem',' $duracao','$ano','$imagem ',' $video')";
        $incluir = mysqli_query($con,$sql);

        //saida - feedback ao usuário
        if($incluir){
            echo "
                <script>
                    alert('Série cadastrada com sucesso!');
                    window.location = 'listarSerie.php';
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
        <p> Clique <a href='formularioSerie.php'>aqui</a> para incluir uma Série. </p>
    ";  
    }
    //else{             coloque esse código para só colocar essa mensagem
        //echo "
        //<p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
        //<p> Entre em contato com o administrador do Sistema. </p>
    //";
    //echo mysqli_error($conexao);
?>