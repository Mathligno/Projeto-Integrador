
    <?php
        
        include "controle.php"
    ?>

    <div class="body">

    <main>
        <div class="row justify-content-center">
        <div class="col-12 col-md-6">
        <div class="main2">
            
            <div class="main_cad">
                <div class="row">
                <div class="col-12 col-md-4">
                    <img id="img1" src="./img/notebook.png">
                </div>
                <div class="col-12 col-md-4">
                    <img id="img2" src="./img/monitor.png">
                </div>
                <div class="col-12 col-md-4">
                    <img id="img3" src="./img/tablet.png">
                </div>
                </div>
            </div>
            <div class="passo">
                <p>Passo 1 de 3</p>
                <h2> Termine de configurar sua conta</h2>
                <p id="cafe">A Cafeteflix é uma plataforma de
                    streaming de fácil acesso e personalização.
                </p>
                <p id="cafe1">
                    Crie uma senha para começar a assistir
                    onde e quando quiser.
                </p>   
            </div>
            <div>
                <form method="post" action="cadastro.php">
                    <div class="row justify-content-center">
                    <div class="col-8">
                    <p>
                        <input class="form-control" type="email" placeholder="Email" name="login" required>
                    </p>
                    </div>
                    <div class="col-8">
                    <p>
                        <input class="form-control" type="password" placeholder="Informe a senha" name="senha" required>
                    </p>
                    </div>
                    <div class="col-8">
                    <p>
                        <input class="form-control" type="password" placeholder="Confirme a senha" name="senha2" required>
                    </p>
                    </div>
                    <div class="col-8">
                    <p>
                        <input class="botao_cad" type="submit" value="Próximo" onclick="return validar()">
                    </p>
                    <script>
                    function validar(){
                    var senha = document.getElementById("senha").value;
                    var senha2 = document.getElementById("senha2").value;

                        if(senha == senha2){
                            return true;
                        }
                        else{
                            alert("senhas diferentes, por favor reescreva-as");
                            return false;
                        };
                    }
                    </script>>
                    </p>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </main>
    
    <?php 
        include "footer.php";
     ?>
    
</div>