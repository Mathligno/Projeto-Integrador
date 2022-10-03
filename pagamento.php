<div class="body">
    
    <?php 
        include "controle.php";
     ?>

    <main>
        
        <div class="row justify-content-center">
        <div class="col-12 col-md-4">
        <div class="main4">
            
            <div>
                <p>Passo 3 de 3</p>
                <h2> Informe os dados do seu cartão</h2>
                <p id="p">Sua assinatura começa assim que finalizar essa estapa.
                <br>
                Cancele quando quiser, sem compromisso ou taxa.</p>
            </div>
            <div class="table">
                <div>
                    <h4> Cartão de Crédito ou Débito</h4>
                </div>
                <div>
                    <img id="pg_img1" src="./img/master.png">
                    <img id="pg_img2" src="./img/visa.png">
                    <img id="pg_img3" src="./img/elo.png">
                </div>
                <div>
                    <form method="post" action="login.php">
                        
                        <p>
                            <input class="form-control"  type="hidden" name="idpagamentos">
                            <input class="form-control"  type="number" placeholder="Número do Cartão" name="num_card" required>
                        </p>
                        <p>
                            <input class="form-control"  type="text" placeholder="Nome do Titular" name="titular" required>
                        </p>
                        <p>
                            <input class="form-control"  type="text" placeholder="Mês/Ano" name="vencimento" required>
                        </p>
                        <p>
                            <input class="form-control"  type="number" placeholder="CVV" name="cvv" required>
                        </p>
                        <p>
                            <input class="form-control" type="text" placeholder="CPF do Titular" name="cpf" pattern="000.000.000-00">
                        </p>
                        <p>
                            <input class="botao_cad" type="submit" value="Finalizar">
                        </p>
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

</d>