<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$c = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($c, "empresa");

$query = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
$result = mysqli_query($c, $query) or die(mysqli_error($c));

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['senha'] = $row['senha'];
    header('Location: principal.php'); // ou principal.php se for esse o nome correto
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Erro de Login</title>
        <style>
            body {
                background-color: #ffebee;
                font-family: Arial, sans-serif;
                text-align: center;
                padding-top: 80px;
            }

            .mensagem {
                background-color: #ffcdd2;
                color: #c62828;
                padding: 20px;
                margin: auto;
                width: 60%;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(200, 0, 0, 0.2);
            }

            .botao {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #e53935;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                transition: background-color 0.3s ease;
            }

            .botao:hover {
                background-color: #c62828;
            }
        </style>
    </head>
    <body>
        <div class="mensagem">
            <h2>Usuário ou senha incorretos!</h2>
            <p>Verifique os dados digitados e tente novamente.</p>
            <a class="botao" href="index.html">← Voltar ao Login</a>
        </div>
    </body>
    </html>
    <?php
    exit();
}
?>
