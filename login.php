
    <?php 
        include "controle3.php";
    ?>

    <div class="body">

    <main>
        <div class="row justify-content-center">
        <div class="col-12 col-md-4">
        <div class="login">
            <div>
                <h1>Entrar</h1>
            </div>
            <div>
                <form method="POST" action="autenticar.php">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            <p>
                                <input class="form-control" type="email" placeholder="Informe seu Email" name="login" required>
                            </p>
                        </div>
                    <div class="col-12 col-md-8">
                        <p>
                            <input class="form-control" type="password" placeholder="Informe sua senha" name="senha" required>
                        </p>
                    </div>
                    <div class="row justify-content-start">
                        <div class="lembrar col-12 col-md-8">
                            <input type="checkbox" m-5 >  Lembrar-me
                        </div>
                    </div>    
                        <div class="novo col-12 col-md-8"> 
                            <p>
                                <input class="botao_cad" type="submit" value="Entrar">
                            </p>
                            <p> Novo na Cafeteflix? <a href="inscrever.php">Inscrever</a> <p>
                        </div>
                </form>
            </div>
        </div>
        </div>
        <
    </main>

    <?php 
        include "footer.php";
     ?>

</div>