<?php
    include "conexao.php";

    if(isset($_GET['titulo'])){

        $titulo = $_GET['titulo'];
        
        $sql = "delete from filmes where titulo = '$titulo'";
        $excluir = mysqli_query($con,$sql);

        //saida - feedback ao usuário
        if($excluir){
            echo "
                <script>
                    alert('Usuário exluido com Sucesso');
                    window.location = 'listarFilme.php';
                </script>
            ";
            header("location: listarFilme.php");
        }
        else{
            echo "
                <p> Bando de Dados temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site ... </p>   
            ";
            echo mysqli_error($con);
        }
    }

    