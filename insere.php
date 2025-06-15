<?php
$nome = $_POST["nome"];
$ender = $_POST["ender"];
$fone = $_POST["fone"];

$c = mysqli_connect("localhost", "root", "") or die("Erro na conexão");
mysqli_select_db($c, "empresa");

$query = "INSERT INTO cliente VALUES (0, '$nome', '$ender', '$fone')";
mysqli_query($c, $query) or die(mysqli_error($c));

mysqli_close($c);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 80px;
        }

        .mensagem {
            background-color: #d0f0d0;
            color: #2e7d32;
            padding: 20px;
            margin: auto;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,128,0,0.2);
        }

        .botao {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .botao:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="mensagem">
        <h2>Dados inseridos com sucesso!</h2>
        <p>Obrigado por utilizar o sistema.</p>
        <a class="botao" href="principal.php">← Voltar ao menu</a>
    </div>
</body>
</html>
