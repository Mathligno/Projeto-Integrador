<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body1">

<?php
    include "conexao.php";
    include "controle.php";
    echo "<br><br><br><br>";
    
    $sql = "select * from usuarios order by idusuario";
    $seleciona = mysqli_query($con, $sql);
?>

<div class="container pag">
    <div class="text-end">
        <a href="adm.php"><button type="button" class="btn btn-success btn-sm">VOLTAR</button></a>
        <a href="formularioUsuario.php"><button type="button" class="btn btn-success btn-sm">NOVO CADASTRO</button></a>
    </div>
    <h2>Lista de Usuários</h2>
    <div class="container text-center">
        <div class="row bg-dark text-light espaco">
            <div class="col-2">
                LOGIN
            </div>
            <div class="col-3">
                SENHA
            </div>
        </div>
        <?php                     
            while ($exibe = mysqli_fetch_array($seleciona)){
                $login = $exibe['login'];                        
        ?>
        <div class="row bg-gradient espaco">
            <div class="col-1">
                <?php echo $exibe['login']?>
            </div>
            <div class="col-1">
            </div>
            <div class="col-3 btn-sm ">
                <?php echo $exibe['senha']?>
            </div>
            <div class="col-7 text-end">
                <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm botao">Editar</button></a>

                <a href="excluirUsuario.php?login=<?php echo $login ?>" onclick="return confirm('Confirma a Exclusão do Usuário?')" > <button type="button" class="btn btn-danger btn-sm">Excluir</button> </a>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

<?php
    echo "<br>","<br>","<br>";
    include "footer.php";
?>
<!-- btn, parâmetro do css encurta a animação do hover do botão -->
</body>
</html>