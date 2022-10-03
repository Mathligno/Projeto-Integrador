<body class="body1">
<?php
    include "conexao.php";
    include "controle.php";

    if(isset($_GET['titulo'])){

        $titulo = $_GET['titulo'];
        
        $sql = "select * from series where titulo = '$titulo'";
        $seleciona = mysqli_query($con,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $titulo = $exibe['titulo'];
        $sinopse = $exibe['sinopse'];
        $pais = $exibe['pais'];
        $linguagem = $exibe['linguagem'];
        $duracao = $exibe['duracao'];
        $ano = $exibe['ano'];
        $imagem = $exibe['imagem'];
        $video = $exibe['video'];

?>

        <div class="container pag">    
            <h1>Editar Dados do Usuário</h1>
            <hr>
            <form name="form" method="post" action="updateSerie.php">
            <div class="mb-3">
                    <input type="hidden" id="idserie" name="idserie" value="<?php echo $idserie; ?>">                    
                </div>                
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" placeholder="Informe o Título" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse</label>
                    <input type="text" class="form-control" id="sinopse" name="sinopse" value="<?php echo $sinopse; ?>" placeholder="Informe a sinopse" required>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $pais; ?>" placeholder="Informe o país" required>
                </div>
                <div class="mb-3">
                    <label for="linguagem" class="form-label">Linguagem</label>
                    <input type="text" class="form-control" id="linguagem" name="linguagem" value="<?php echo $linguagem; ?>" placeholder="Informe a linguagem" required>
                </div>
                <div class="mb-3">
                    <label for="duracao" class="form-label">Duração</label>
                    <input type="number" class="form-control" id="duracao" name="duracao" value="<?php echo $duracao; ?>" placeholder="Informe a duração" required>
                </div>  
                <div class="mb-3">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="number" class="form-control" id="ano" name="ano" value="<?php echo $ano; ?>" placeholder="Informe o país" required>
                </div>  
                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="text" class="form-control" id="imagem" name="imagem" value="<?php echo $imagem; ?>" placeholder="Informe o link da imagem" required>
                </div>  
                <div class="mb-3">
                    <label for="video" class="form-label">Vídeo</label>
                    <input type="text" class="form-control" id="video" name="video" value="<?php echo $video; ?>" placeholder="Informe o link do vídeo" >
                </div>           
                <div class="row mt-5">
                    <div class="col text-start">
                        <a href="listarSerie.php"> <button type="button" class="btn btn-warning btn-sm">VOLTAR</button> </a>
                    </div>      
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-sm botao">ALTERAR DADOS</button>
                    </div>
                </div>
            </form>           
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<?php

    }
    else{
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listarUsuario.php'>aqui</a> para selecionar um Usuário. </p>
        ";   
    }

    include "footer.php";
?>
