<?php
include "conexao.php";

// tratamento de erro
  if(isset($_GET['idProfessor'])){
      //entrada
      $idProfessor = $_GET['idProfessor'];  
    
      //processamento
      $sql = "delete from professores where id = $idProfessor";
      $excluir = mysqli_query($conexao,$sql); 

      //saida
      if($excluir){
          echo "
          <script>
            alert ('Professor excluído com sucesso!');
            window.location = 'listarProfessor.php';
          
          </script>
          "; 
        }

        else{
            echo "
            <p> Sistema temporariamente fora do ar. Tente novamnente mais tarde .</p>
            <p> Entre em contato com administrador do sistema.</p>
            ";
            echo mysqli_error($conexao);
        }

  }
    else{
        echo" 
        <p>Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href ='listarProfessor.php'>aqui</a> para Excluir um professor</p>
    ";
      }
  
?>