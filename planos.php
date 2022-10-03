
    <?php 
        include "controle3.php";
        ?>

    <div class="body">

    <main>
        <div class="row justify-content-center">
        <div class="col-12 col-md-4">
        <div class="main3">
            
            <div class="passo">
                <p>Passo 2 de 3</p>
                <h2> Escolhe o melhor plano para você</h2>
                <p id="troque">Troque ou cancele quando quiser.</p>
            </div>

            <div class="container">
                <div class="row justity-content-center">
                    <div class="col-3"></div>
                    <div class="col-3 plano"> <p> Plano 1 </p></div>
                    <div class="col-3 plano"> <p> Plano 2 </p></div>
                    <div class="col-3 plano"> <p> Plano 3 </p></div>
                </div>
                <div class="row m-3">
                    <div class="col-3"> Preço: </div>
                    <div class="col-3"> R$ 19,90 </div>
                    <div class="col-3" id="preco2"> R$ 39,90 </div>
                    <div class="col-3" id="preco3"> R$ 59,90 </div>
                </div>
                <div class="row img_table m-3">
                    <div class="col-3"> HD: </div>
                    <div class="col-3"> <img src="./img/xis.png"> </div>
                    <div class="col-3" id="confere2"> <img src="./img/confere.png"> </div>
                    <div class="col-3" id="confere3"> <img src="./img/confere.png"> </div>
                </div>
                <div class="row img_table m-3">
                    <div class="col-3"> Ultra HD: </div>
                    <div class="col-3"> <img src="./img/xis.png"> </div>
                    <div class="col-3" id="confere2"> <img src="./img/xis.png"> </div>
                    <div class="col-3" id="confere3"> <img src="./img/confere.png"> </div>
                </div>
                <div class="row m-3">
                    <div class="col-3"> Telas: </div>
                    <div class="col-3"> 1 </div>
                    <div class="col-3" id="quant2"> 2 </div>
                    <div class="col-3" id="quant3"> 4 </div>
                </div>
                <div class="row img_table m-3">
                    <div class="col-3"> Ilimitado: </div>
                    <div class="col-3"> <img src="./img/confere.png"> </div>
                    <div class="col-3" id="quant2"> <img src="./img/confere.png"> </div>
                    <div class="col-3" id="quant3"> <img src="./img/confere.png"> </div>
                </div>
                <p></p>
                <div class="row m-3">
                    <div class="col-3"></div>
                    <div class="col-3"> <a id="selecione1" href="pagamento.php"> Selecione </a> </div>
                    <div class="col-3"> <a id="selecione2" href="pagamento.php"> Selecione </a> </div>
                    <div class="col-3"> <a id="selecione3" href="pagamento.php"> Selecione </a> </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    </div>

    <?php 
        include "footer.php";
     ?>

</body>