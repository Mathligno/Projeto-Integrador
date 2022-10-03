<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            background-color: black;
            color: green;
        }
    </style>
</head>
<body>
    <center>
    <form method="POST" action="incluir.php">
        <p>
            <input type="text" name="nome_produto" placeholder="Informe o nome do produto.">
        </p>
        <p>
            <input type="number" name="preco" placeholder="Informe o valor do produto." step="0.01">
        </p>
        <p>
            <input type="number" name="quantidade" placeholder="Informe a quantidade do produto.">
        </p>
        <p>
            <input type="text" name="imagem" placeholder="adicione uma imagem.">
        </p>
        <p>
            <input type="submit" value="Salvar">
            <input type="reset" value="Limpar">
        </p> 
    </form>
    </center>
    
</body>
</html>