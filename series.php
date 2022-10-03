<?php
        include "logado.php";
        include "conexao.php";
        include "controle1.php";
     ?>
     
  <div class="body2">   
    <!-- Banner Filmes -->
    <div class="banner_Filmes">
        <img class="title-logo" src="">
        <p> A garota mais popular de uma escola de elite perde seu status e faz
          <br>um acordo secreto com uma nova aluna despretensiosa para se
          <br>vingarem dos inimigos uma da outra </p>
        <div class="buttons">
            <button id="play" class="btn"> <img src="./img/play.png">  Assistir </button>
            <button id="info" class="btn"> <img src="./img/info.png"> Minha Lista </button>
        </div>
    </div> <!-- Fim Banner -->
<!-- Carousel1 -->
    <div class="carousel1">
    <p>Em Alta</p>
    <div class="media-container">
    <div class="media-scroller">
    <!--   Group 1 -->
    <div class="media-group" id="group-1">
    <a class="previous" href="#group-4">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-2" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Group 2   -->
    <div class="media-group" id="group-2">
      <a class="previous" href="#group-1">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
        <h3></h3>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-3" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Group 3   -->
    <div class="media-group" id="group-3">
      <a class="previous" href="#group-2">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-4" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!--  Group 4  -->
    <div class="media-group" id="group-4">
      <a class="previous" href="#group-3">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
     <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>
      <a class="next" href="#group-1" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Pagination Indicators -->
    <div class="navigation-indicators">
      <!-- 4 Groups -->
    </div>
  </div>
</div>
<!-- Navigation Icons -->

</div>
<!-- Carousel2 -->
<div class="carousel2">
<p>Minha Lista</p>
<div class="media-container">
    <div class="media-scroller">
    <!--   Group 5 -->
    <div class="media-group" id="group-5">
    <a class="previous" href="#group-8">
        <svg>
          <use href="#previous"></use>  
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-6" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Group 6   -->
    <div class="media-group" id="group-6">
      <a class="previous" href="#group-5">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-7" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Group 7   -->
    <div class="media-group" id="group-7">
      <a class="previous" href="#group-6">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>

      <a class="next" href="#group-8" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!--  Group 8  -->
    <div class="media-group" id="group-8">
      <a class="previous" href="#group-7">
        <svg>
          <use href="#previous"></use>
        </svg>
      </a>
     <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt="" /> <label id="titulo"></label>
      </div>
      <div class="media-element">
        <img id="bg_img" src="" alt=""/> <label id="titulo"></label>
      </div>
      <a class="next" href="#group-5" aria-label="next">
        <svg>
          <use href="#next"></use>
        </svg>
      </a>
    </div>
    <!-- Pagination Indicators -->
    <div class="navigation-indicators">
      <!-- 4 Groups -->
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</div>
<!-- Navigation Icons -->
<svg>
  <symbol id="next" viewBox="0 0 256 512">
    <path fill="white"
      d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
  </symbol>
  <symbol id="previous" viewBox="0 0 256 512">
    <path fill="white"
      d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
  </symbol>
</svg>
</div>
</div>

    <?php 
        include "footer.php";
     ?>