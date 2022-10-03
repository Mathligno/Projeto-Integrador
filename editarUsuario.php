<?php
    include "conexao.php";
    include "controle.php";

    if(isset($_GET['login'])){

        $login = $_GET['login'];
        
        $sql = "select * from usuarios where login = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $nome = $exibe['nome'];
        $email = $exibe['email'];
    
?>

        <div class="container pag">    
            <h1>Editar Dados do Usuário</h1>
            <hr>
            <form name="form" method="post" action="updateUsuario.php">
                <div class="mb-3">
                    <input type="hidden" id="login" name="login" value="<?php echo $login; ?>">                    
                </div>                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="nome@exemplo.com" required>
                </div>
                
                <div class="row mt-5">
                    <div class="col text-start">
                        <a href="listarUsuario.php"> <button type="button" class="btn btn-warning btn-sm">VOLTAR</button> </a>
                    </div>
                   
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-sm botao">ALTERAR DADOS</button>
                    </div>
                </div>
            </form>           
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php

    }
    else{
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listarUsuario.php'>aqui</a> para selecionar um Usuário. </p>
        ";   
    }

    include"../footer.php";
?>
