<?php

    include "conexao.php";˝

    if(isset($_POST['login'])){
        //entrada - coletar os dados do formulário
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        //$foto = './fotos/semfoto.png';
        
        //processamento - incluir no banco de dados
        $sql = "insert into usuarios(login,senha) values('$login','$senha')";
        $incluir = mysqli_query($con,$sql);

        //saida - feedback ao usuário
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listarUsuario.php';
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
        <p> Clique <a href='formularioUsuario.php'>aqui</a> para incluir um Usuário. </p>
    ";  
    }
    //else{             coloque esse código para só colocar essa mensagem
        //echo "
        //<p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
        //<p> Entre em contato com o administrador do Sistema. </p>
    //";
    //echo mysqli_error($conexao);
?>