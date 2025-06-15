<?php
$v1 = $_POST['codigo'];	
$v2 = $_POST['nome'];
$v3 = $_POST['ender'];
$v4 = $_POST['fone'];

$c = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($c, "empresa");

$query = "UPDATE cliente SET nome='$v2', ender='$v3', fone='$v4' WHERE codigo = $v1";
$result = mysqli_query($c, $query);
mysqli_close($c);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Cliente</title>
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
            transition: back
