<div class="body6">

  <?php
    include "conexao.php";
    include "controle.php";
    
    $sql = "select * from filmes order by idfilme";
    $seleciona = mysqli_query($con, $sql);
  ?>
  <div class="container pag">
    <div class="text-end">
        <a href="adm.php"><button type="button" class="btn btn-success btn-sm">VOLTAR</button></a>
        <a href="formularioFilme.php"><button type="button" class="btn btn-success btn-sm">NOVO CADASTRO</button></a>
    </div>
    <h2>Lista de Filmes</h2>
    <div class="container text-center">
        <div class="row bg-dark text-light espaco">
            <div class="col-1">
            </div>
            <div class="col-1">
            titulo
            </div>
            <div class="col-1">
            sinopse
            </div>
            <div class="col-1">
            pais
            </div>
            <div class="col-1">
            linguagem
            </div>
            <div class="col-1">
            duracao
            </div>
            <div class="col-1">
            ano
            </div>
            <div class="col-1">
            imagem
            </div>
            <div class="col-1">
            video
            </div>
            <div class="col-1">
            Editar
            </div>
            <div class="col-1">
            Excluir
            </div>
            <div class="col-1">
            </div>
        </div>
        <?php                     
            while ($exibe = mysqli_fetch_array($seleciona)){
                $titulo = $exibe['titulo'];
        ?>
        <div class="row bg-gradient espaco">
        <div class="col-1">
            </div>
        <div class="col-1">
                <?php echo $exibe['titulo']?>
            </div>
            <div class="col-1">
                <?php echo $exibe['sinopse']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['pais']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['linguagem']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['duracao']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['ano']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['imagem']?>
            </div>
            <div class="col-1 btn-sm ">
                <?php echo $exibe['video']?>
            </div>
            <div class="col-1 text-end">
                <a href="editarFilme.php?titulo=<?php echo $titulo ?>"><button type="button" class="btn btn-primary btn-sm botao">Editar</button></a>
            </div>
            <div class="col-1 text-end">
                <a href="excluirFilme.php?titulo=<?php echo $titulo ?>" onclick="return confirm('Confirma a Exclusão do Filme?')" > <button type="button" class="btn btn-danger btn-sm">Excluir</button> </a>
            </div>
            <div class="col-1">
            </div>
        </div>
        <?php
          }
        ?>
    </div>
  </div>
</div>
<?php
    include "footer.php";
?>
<!-- btn, parâmetro do css encurta a animação do hover do botão -->