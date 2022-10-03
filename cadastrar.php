<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: green;
        }
    </style>
</head>
<body><center>
    <h1>Cadastro de Usuario</h1>
    <form method="POST" action="cadastro.php">

        <p>
            <input type="text" name="login" placeholder="Login" required>
        </p>
        <p>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
        </p>
        <p>
            <input type="password" name="senha2" id="senha2" placeholder="Confirmar senha" required>
        </p>
        <p>
            <input type="number" name="plano" placeholder="plano" required>
        </p>
        <p>
            <input type="text" name="imagem" placeholder="foto">
        </p>
        <p>
            <input type="submit" value="Cadastrar" onclick="return validar()">
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
    </script>
    </form>

    <form method="POST" action="login.php">
        <p>Já tem uma conta?  <input type="submit" value="login"></p>
    </from>
    
    <form method="POST" action="index.php">
        <p>Volte para o index <input type="submit" value="aqui"></p>
    </form>
</center></body>
</html>