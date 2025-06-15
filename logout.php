<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['senha']);
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
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
        <h2>Você saiu do sistema com sucesso!</h2>
        <p>Esperamos ver você novamente.</p>
        <a class="botao" href="index.html">← Voltar
