<?php
    include "controle1.php";
    echo "<br>","<br>","<br>";  
?>
        <div class="container pag">
            <h1>Cadastro de Série</h1>
            <form name="form" method="post" action="incluirSerie.php">
            <div class="mb-3">
                    <label for="idserie" class="form-label"></label>
                    <input type="hidden" class="form-control" id="idserie" name="idserie">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" placeholder="Informe o Título da Série" id="titulo" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="sinopse" class="form-label">Sinopse</label>
                    <input type="text" class="form-control" placeholder="Informe a Sinopse" id="sinopse" name="sinopse" required>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" placeholder="Informe o País de origem" id="pais" name="pais" required>
                </div>
                <div class="mb-3">
                    <label for="linguagem" class="form-label">Linguagem</label>
                    <input type="text" class="form-control" id="linguagem" name="linguagem" placeholder="Coloque a lingua" required>
                </div>
                <div class="mb-3">
                    <label for="duracao" class="form-label">Duração</label>
                    <input type="text" class="form-control" placeholder="Informe a Duração (em minutos)" id="duracao" name="duracao" required>
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="text" class="form-control" placeholder="Informe o Ano" id="ano" name="ano" required>
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="text" class="form-control" placeholder="Informe o link da imagem" id="imagem" name="imagem" required>
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Vídeo</label>
                    <input type="text" class="form-control" placeholder="Informe o link do vídeo" id="video" name="video">
                </div>
                <br>
                <div class="row">
                    <div class="col text-start">
                        <a href="listarSerie.php"> <button type="button" class="btn btn-success btn-sm">VOLTAR</button> </a>
                    </div>
                    <div class="col text-end">
                        <button type="submit" class="btn btn-success btn-sm botao">CADASTRAR</button></a>
                    </div>
                </div>
            </form>           
        </div>

<?php
    echo "<br>","<br>","<br>";
    include "footer.php";
?>
   
   