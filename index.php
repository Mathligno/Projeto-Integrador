
    <?php
        //include "logado.php";
        //include "conexao.php";
        include "controle3.php";
    ?>

    <div class="body fixed">
    <main>
        <div class="row justify-content-center">
        <div class="col-12 col-md-6">
        <div class="main">
            <div>
                <h1> Filmes e Séries para a sua diversão. </h1>
            </div>
            <div>
                <p> Assista onde e quando quiser em todo e qualquer lugar. </p>
            </div>
            <div>
                <p> Pronto para assistir? Informe o email para começar a sessão. </p>
            </div>

            <div>
                <form method="post" action="inscrever.php">
                    <div class="row">
                        <div class="email col-12 col-md-8 mt-3">
                            <input class="form-control" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="col-12 col-md-1 mt-3">
                            <input class="botao_cad" type="submit" value="Vamos lá!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>  

    </main>

    <?php 
        include "footer.php";
     ?>

</div> 