<div class="body5">

<?php
  include"logado.php";
  include"controle2.php";
?>
  
  <div class="icones container mt-5">
      <div class="quadro container row text-center text-white  espaco">
          <div class="col quadro">
          <a href="listarUsuario.php">  
          <img src="img/usuario.png">
              <p>Usuario</p>
         </a>
         </div>
         
          <div class="col">
         <a href="listarFilme.php">
              <img src="./img/filme.png">
              <p>Filmes</p>
         </a>

         </div>
          <div class="col">
          <a href="listarSerie.php">
              <img src="img/serie.png">
              <p>Séries</p>
         </a>

         </div>
      </div>
    </div>

</div>    
  <?php
    include"footer.php";
  ?>
