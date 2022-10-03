<?php
    include "controle.php";  
?>
        <div class="container pag">
            <h1>Cadastro de Usuário</h1>
            <form name="form" method="post" action="incluirFilme.php">  
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="email" class="form-control" id="login" name="login" placeholder="nome@exemplo.com" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" placeholder="Coloque uma senha" id="senha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="senha2" class="form-label">Senha</label>
                    <input type="password" class="form-control" placeholder="Repita a senha" id="senha2" name="senha2" required>
                </div>
                <br>
                <div class="row">
                    <div class="col text-start">
                        <a href="listarUsuario.php"> <button type="button" class="btn btn-success btn-sm">VOLTAR</button> </a>
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